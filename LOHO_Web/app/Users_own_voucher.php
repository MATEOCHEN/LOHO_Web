<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_own_voucher extends Model
{
    //
    protected $table = 'users_own_vouchers';
    protected $primaryKey = ['user_id', 'voucher_id'];
    protected $fillable = [
        'user_id','voucher_id','using_state'
    ];
}
