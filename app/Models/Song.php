<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table = 'songs';
    public function singer()
    {
        //intermidate table singer_songs
        return $this->belongsToMany(Singer::class, 'singer_songs');
    }
}