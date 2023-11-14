<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'id'=>1,
            'ProductName'=>'lotion',
            'Description'=>'sticky',
            'Price'=>150,
            'QuantityInStock'=>15
        ]);
        DB::table('suppliers')->insert([
            'SupplierId'=>2,
            'SupplierName'=>'juan',
            'ContactNo'=>69123,
            'Address'=>'bataan'
        ]);
        DB::table('categories')->insert([
            'SupplierID'=>3,
            'SupplierName'=>'juan',
        ]);
        DB::table('orders')->insert([
            'OrderID'=>4,
            'OrderDate'=>'December',
            'TotalAmount'=>100,
            'Status'=>'Out of stock'
        ]);
        DB::table('customers')->insert([
            'CustomerID'=>5,
            'FirstName'=>'Juan',
            'LastName'=>'Dela Cruz',
            'Email'=>'juan@mail.com',
            'Phone'=>69123
        ]);
        DB::table('order_details')->insert([
            'OrderDetailID'=>6,
            'OrderID'=>4,
            'ProductID'=>1,
            'Quantity'=>600,
            'Subtotal'=>1000
        ]);
        
    }
}