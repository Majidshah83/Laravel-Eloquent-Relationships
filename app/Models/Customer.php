<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // one to one realtionship
    public function mobile()
    {
        return $this->hasOne(Mobile::class);
    }
}