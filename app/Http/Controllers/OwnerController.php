<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Customer;
use App\Models\Mobile;
use App\Models\Mechanic;
use App\Models\Owner;
class OwnerController extends Controller
{
    //
    public function add_owner()
    {
        $owner= new Owner();
        $owner->name='majid shah';
        $owner->save();
    }
     public function addowner($id)
    {
        $car=Car::find($id);
        $owner= new Owner();
        $owner->name='ikram shah';

        $car->owner()->save($owner);
    }
    // get owner through  Micanic id
    public function ownerget($id)
    {
        $owner=Mechanic::find($id)->owner;
        return $owner;
    }
}
