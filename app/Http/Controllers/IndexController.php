<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobile;
class IndexController extends Controller
{
    //
    public function index()
    {
        $customer=Customer::with('mobile')->get();
        // $mobile=Mobile::with('customer')->get();
        return $customer;
     }
     //both model show
     public function show($id)
     {
        $customer=Customer::find($id);
        var_dump($customer->name);
        var_dump($customer->email);
        var_dump($customer->mobile->model);

         $mobile=Mobile::find($id);
        var_dump($mobile->model);
        var_dump($mobile->customer->name);
        var_dump($mobile->customer->email);
     }
}