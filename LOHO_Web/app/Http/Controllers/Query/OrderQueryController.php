<?php

namespace App\Http\Controllers\Query;

use App\Http\Controllers\Controller;



class OrderQueryController extends Controller
{
    public function searchOrder() {
        return view('Query\OrderQuery');
    }
}
