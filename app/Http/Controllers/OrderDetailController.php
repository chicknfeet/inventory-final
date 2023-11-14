<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OrderDetail;

class OrderDetailController extends Controller
{
    //
    public function index(){
        return view('orderdetail')->with(["order_details" => OrderDetail::first()]);
    }
}
