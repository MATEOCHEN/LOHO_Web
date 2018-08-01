<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//匯入關聯Eloquent
use \app\User as UserEloquent;
use \app\Score as ScoreEloquent;
class Student extends Model
{
    //
    protected $table = 'student';

    public function user(){
        return $this->belongsTo(UserEloquent::class);
    }

    public function score(){
        return $this->hasOne()(ScoreEloquent::class);
    }
}
