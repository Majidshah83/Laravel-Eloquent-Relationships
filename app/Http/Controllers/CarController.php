<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use App\Models\Customer;
use App\Models\Mobile;
use App\Models\Mechanic;
class CarController extends Controller
{
    public function addCar($id)
    {
       $mehanic=Mechanic::find($id);
       $car= new Car();
       $car->model='g10';
       $mehanic->car()->save($car);
    }

}