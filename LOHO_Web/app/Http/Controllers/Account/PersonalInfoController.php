<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
class PersonalInfoController extends Controller
{

    public function PersonalInformation()
    {   
        $user = User::where('id', Auth::user()->id)->first();

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'telephone_number' => $user->telephone_number,
            'phone_number' => $user->phone_number,
            'postal_code' =>$user->postal_code,
            'country' => $user->country,
            'area' => $user->area,
            'address' => $user->address,
        ];

        return view('Account\PersonalInformation',compact('data'));
    }

    public function ModifyPersonalInformation(Request $request)
    {   
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telephone_number = $request->telephone_number;
        $user->phone_number = $request->phone_number;
        $user->postal_code = $request->postal_code;
        $user->save();
        
        return response()->json([]);
        //$user->country = $request->country;
        //$user->area = $request->area;
        //$user->address = $request->address;
    }

}
