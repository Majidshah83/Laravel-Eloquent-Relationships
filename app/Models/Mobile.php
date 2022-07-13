<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;
    //reverse realtionship
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}