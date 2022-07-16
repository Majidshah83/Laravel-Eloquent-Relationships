<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;
class SongController extends Controller
{
    //
    public function storeSong()
    {
        $song=new Song();
        $song->title='pakistan pakisatan jee';
        $song->save();


    }
    // get song base singer id

    public function show_song($id)
    {
      $song=Singer::find($id)->song;
      return $song;
    }
}
