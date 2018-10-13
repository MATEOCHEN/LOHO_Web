<?php

namespace App\Http\Controllers\Admin\ManageAccounts;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;

class ManageAccountsController extends BaseController
{ 
    public function ManageAccounts()
    {    
        $users = User::all();
        $users_list = array();
         foreach ($users as $user) {
             $user_tmp = [
                 'id' => $user->id,
                 'account' => $user->account,
                 'name' => $user->name,
                 'email' => $user->email,
                 'telephone_number' => $user->telephone_number,
                 'phone_number' => $user->phone_number,
                 'address' => $user->address,
                 'is_subscribe' => $user->is_subscribe,
                 'created_at' => $user->created_at,
                 'updated_at' => $user->updated_at
             ];
             array_push($users_list,$user_tmp);
         }
         $data = ['users' => $users_list];

         return view('Admin/ManageAccounts',compact('data'));
         //return response()->json(['users' => $users_list]);
    }

}
