<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Student as StudentEloquent;//匯入關聯Eloquent
class Score extends Model
{
    //
    protected $table = 'score';

    /*建立Student資料表的Eloquent關聯
    public function student(){
        return $this->belongsTo(StudentEloquent::class);
    }*/
    public function student()
    {
        return $this->belongsTo('app/Student');
    }

    //自定義資料撈取內容，以總分進行排序
    public function scoreOrderByTotal($query){
        return $query->orderBy('score.total','DESC');
    }

    //自定義資料撈取內容，以科目進行排序
    public function scoreOrderBySubject($query){
        return $query->orderBy('score.chinese','DESC')
        ->orderBy('score.english','DESC')
        ->orderBy('score.math','DESC');
    }

    public function sort($query){
        return $query->orderBy('chinese','DESC');
    }

    function __construct() {

        echo "我是建構子...<br/>";

    }
}
