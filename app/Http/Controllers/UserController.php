<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Appointment;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function profile_settings()
    {
        return view('user.settings');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function update_info(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'contact' => 'required',
        ]);

        $find_user = User::find(Auth::id());
        if( $find_user )
        {
            $find_user->update($validatedData);
        }

        return back()->with('success','Profile Updated Successfully');
    }

    public function update_password(Request $request)
    {
        $validatedData = $request->validate([
            'password'              => 'required|min:6|max:255',
            'new_password'          => 'required|min:6|max:255',
            'repeat_new_password'   => 'same:new_password',
        ]);

        $find_user = User::find(Auth::id());
        if( $find_user )
        {
            if (Auth::attempt(['email'=> $find_user->email, 'password'=> $validatedData['password']]))
            {
                $find_user->update(['password'=> bcrypt($validatedData['repeat_new_password'])]);
                return back()->with('success','Password Updated Successfully');
            }else 
            {
                return back()->with('error','Invlaid Current Password');
            }
        }
    }

    public function appointment_first()
    {
        return view('user.appointment');
    }
    public function appointment_type()
    {
        return view('user.appointment_type');
    }
    public function dog()
    {
        return view('user.dog');
    }
    public function cat()
    {
        return view('user.cat');
    }
    public function appointment_reason()
    {
        return view('user.reason');
    }
    public function calendar()
    {
        return view('user.calendar');
    }
    public function confirmation()
    {
        return view('user.confirmation');
    }
    public function set_appointment(Request $request)
    {
        $pet = $request->pet;

         $check_appointment = Appointment::where('date', $pet['date'] )->orderBy('id','desc')->first();
         //return response()->json( ['message'=> $check_appointment,'status'=> 200] );
        if( !is_null($check_appointment) )
        {
            if($check_appointment->queue_number == 15)
            {
                return response()->json( ['message'=> 'We have reach the maximum 15 appointment this date.','status'=> 404] );
            }
            $queue_number = $check_appointment->queue_number + 1;
        }else 
        {
            $queue_number = 1;
        }

        $pet['queue_number'] = $queue_number;
        $pet['status_name'] = 'pending';


         Appointment::create($pet);

        return response()->json( ['message'=> 'success','date'=> $pet['date'],'queue'=> $queue_number,'status'=> 200] );
    }

    public function appointment_first_groom()
    {
       return view('user.appointment');
    }

    public function grooming_confirmation()
    {
        return view('user.grooming_confirmation');
    }
}
