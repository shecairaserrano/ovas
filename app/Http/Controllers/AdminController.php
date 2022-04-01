<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

use App\Pet;
use App\User;
use App\Appointment;


class AdminController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function view_client()
    {
        $clients =  User::whereHas('roles', function ($query) {
            $query->where('name','=', 'client');
        })->paginate(10);

        return view('admin.clientrecord',compact('clients'));
    }
    
    public function create_client(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);

        $validatedData['password'] = bcrypt('client2022');


        $user = User::create($validatedData);
        $user->assignRole('client');
        return back()->with('success','Client Added Successfully!');
    }

    public function delete_client(Request $request)
    {
        $find_user = User::where('id',$request->client_id)->first();
        if(!$find_user)
        {
            return back()->with('error','User Do Not Exist');
        }

        $find_user->delete();
        return back()->with('success','User Delete Successfully');
    }

    public function find_client(Request $request)
    {

       return response()->json(User::find($request->client_id)); 
    }

    public function update_client(Request $request)
    {
        $validatedData = $request->validate([
            'email'     => 'required|max:255',
            'name'      => 'required',
            'address'   => 'required',
            'contact'   => 'required',
            'client_id' => 'required'
        ]);

        $find_user = User::find($validatedData['client_id']);

        if( !$find_user )
        {
           return back()->with('error','User Not found '); 
        }

        unset($validatedData['client_id']);

        $find_user->update($validatedData);

        return back()->with('success','User Updated Successfully');

    }

    public function pet_record()
    {
        $pets = Pet::paginate(10);

        return view('admin.petrecord',compact('pets'));
    }

    public function create_pet(Request $request)
    {
        $validatedData = $request->validate([
            'name'              => 'required|max:255',
            'age'               => 'required',
            'gender'            => 'required',
            'breed'             => 'required',
            'appointment_date'  => 'required',
            'reason'            => 'required'
        ]);

        Pet::create($validatedData);
       
        return back()->with('success','Pet Added Successfully!');

    }

    public function delete_pet(Request $request)
    {
        $find_pet = Pet::where('id',$request->pet_id)->first();
        if(!$find_pet)
        {
            return back()->with('error','Pet Do Not Exist');
        }

        $find_pet->delete();
        return back()->with('success','Pet Delete Successfully');
    }

    public function find_pet(Request $request)
    {
        return response()->json(Pet::find($request->pet_id)); 
    }

    public function update_pet(Request $request)
    {
        $validatedData = $request->validate([
            'name'              => 'required|max:255',
            'age'               => 'required',
            'gender'            => 'required',
            'breed'             => 'required',
            'appointment_date'  => 'required',
            'reason'            => 'required',
            'pet_id'            => 'required'
        ]);

        $find_user = Pet::find($validatedData['pet_id']);

        if( !$find_user )
        {
           return back()->with('error','Pet Not found '); 
        }

        unset($validatedData['pet_id']);

        $find_user->update($validatedData);

        return back()->with('success','Pet Updated Successfully');
    }

    public function appointment()
    {
        $appointments = Appointment::all();
        return view('admin.appointment',compact('appointments'));
    }

    public function announcement()
    {
        return view('admin.announcement');
    }

    public function concern()
    {
        return view('admin.concern');
    }

    public function appointment_accept($id)
    {
       $find_appointment = Appointment::find($id);

      
       if($find_appointment)
       {
        

        $pet = new Pet;
        $pet->name = $find_appointment->pet_name ;
        $pet->age = $find_appointment->pet_age ;
        $pet->gender = $find_appointment->pet_gender ;
        $pet->breed = $find_appointment->breed ;
        $pet->appointment_date = $find_appointment->date ;
        $pet->reason = $find_appointment->reason ? $find_appointment->reason : $find_appointment->reason_menu ;
        $pet->save();

        $find_appointment->update(['status_name'=> 'accepted']);

        $message = "Dear ".$find_appointment->user->name.", 

        We are pleased to inform you that your booking Queue# ".$find_appointment->queue_number." at ".$find_appointment->date." is confirmed. 

        Booking details:

        ".$find_appointment->pet_name.":
        Category of service: ".$find_appointment->reason_menu."
        Reason/Package: ".$find_appointment->reason." Package

        Note: Please visit our clinic within 10 mins. Thank you and keep safe.";


        $this->itexmo($find_appointment->user->contact,$message,"ST-SHECA758136_5668P","}6%&dy(icj");

        return back()->with('success',' Appointment Accepted Successfully');
       } 
    }

    public function appointment_decline($id)
    {
        $find_appointment = Appointment::find($id);
       if($find_appointment)
       {
        $message = "Dear ".$find_appointment->user->name.",

We are sorry to inform you that your booking  Queue# ".$find_appointment->queue_number." at ".$find_appointment->date." is not accepted for the following details:

- Veterinarian is not available.
- Have reached maximum appointment per day.
- Selected wrong date of visit.
- Admin Error and etc.

Note: You can always go back to our website, go to your account and book a new appointment.";

$this->itexmo($find_appointment->user->contact,$message,"ST-SHECA758136_5668P","}6%&dy(icj");

        $find_appointment->delete();
        return back()->with('success',' Appointment Deleted Successfully');
       } 
    }

    public function itexmo($number,$message,$apicode,$passwd)
    {

        $ch = curl_init();
        $itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
        curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($itexmo));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        echo  curl_exec ($ch);
        curl_close ($ch); 

    }


}
