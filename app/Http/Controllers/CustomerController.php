<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobile;

class CustomerController extends Controller
{
    //insert data
    public function add_customer()
    {
       $mobile= new Mobile();
       $mobile->model="Iphone";

       $customer=new Customer();
       $customer->name='ali';
       $customer->email='ali@gmail.com';
       $customer->save();
       $customer->mobile()->save($mobile);

    }
    //through customer retrive mobile data
    public function show_mobile($id)
    {
     $mobile=Customer::find($id)->mobile->get();

        return $mobile;














        
    }
}