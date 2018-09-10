<?php

namespace App\Http\Controllers\Account\AccountControllerImp;
use Hash;
use Illuminate\Support\Facades\Mail;
class AfterForgetPassword implements AccountControllerPostImp
{
    public function handle(\Illuminate\Http\Request $request)
    {   
        
        $account = Hash::make($request->account);
        if (Hash::check('admin', $account)) {
            echo '(Hash::check OK';
        }
        else{
            echo '(Hash::check Not OK';
        }

        $request->session()->put('key', 'value');
        if ($request->session()->has('key')) {
            //
            $value = $request->session()->get('key', 'default');
            echo  $value;
        }

        if (Hash::needsRehash( $account)) {
            echo '需再Hash::check加密';
            $hashed = Hash::make('plain-text');
        }
        
    }
}