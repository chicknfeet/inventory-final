<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view('customer')->with(["customers" => Customer::first()]);
    }
}
