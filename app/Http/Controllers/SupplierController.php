<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    
    public function index(){
        return view('supplier')->with(["suppliers" => Supplier::first()]);
    }
}