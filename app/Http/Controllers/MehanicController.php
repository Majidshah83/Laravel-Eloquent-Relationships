<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use APP\Models\Car;
use APP\Models\Owner;
use App\Models\Customer;
use App\Models\Mobile;
use App\Models\Mechanic;
class MehanicController extends Controller
{
    //
    public function add_mehanic()
    {

       $mechanic=new Mechanic();
        $mechanic->name='fawad';
        $mechanic->save();
    }
}
