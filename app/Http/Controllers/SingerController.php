<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SingerSong;
use App\Models\Song;
use App\Models\Singer;

class SingerController extends Controller
{
    //show all singe have sung song
    public function index()
    {
         $singer=Singer::with('song')->get();
         return $singer;
    }

    public function store()
    {

        $singer=new Singer();
        $singer->name='Atif';
        $singer->save();
        $songid=[1,2,5];
       $singer->song()->attach($songid);
    }
    // get singer base song id

    public function show_singer($id)
    {
      $singer=Song::find($id)->singer;
      return $singer;
    }
}
