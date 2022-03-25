<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;


class AuthController extends Controller
{
    
    public function login_check(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|max:50',
            'password' => 'required|max:50',
           
        ]);

        if( !Auth::attempt($validatedData))
        {
            return back()->with('error','Invalid Combination Email/Password');
        }

        if( Auth::user()->hasRole('admin') )
        {
            return redirect('/admin');
        }else if( Auth::user()->hasRole('client') )
        {
            return redirect()->route('profile');
        }else 
        {
            return 'Invalid Account Type';
        }

    }

    public function register_check(Request $request)
    {
        $validatedData = $request->validate([
            'email'             => 'required|unique:users|max:255',
            'name'              => 'required',
            'address'           => 'required',
            'contact'           => 'required',
            'password'          => 'required|min:6|max:12',
            'repeat_password'   => 'same:password'
        ]);

        unset($validatedData['repeat_password']);
        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);
        $user->assignRole('client');

        return back()->with('success','Created Account Successfully');


    }
}
