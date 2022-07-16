<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;
     protected $table = 'singers';
    public function song()
    {
        // intermidate table singer_songso
        return $this->belongsToMany(Song::class,'singer_songs');
    }
}