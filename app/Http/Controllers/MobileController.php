<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobile;
class MobileController extends Controller
{
    //though mobile show customer record
    public function show_customer($id)
    {
        $customer=Mobile::find($id)->customer;
      return $customer;
    }

}
