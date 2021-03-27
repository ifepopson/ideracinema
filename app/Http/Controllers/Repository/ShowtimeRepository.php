<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;

use App\Models\showtime;

class ShowtimeRepository
{
    //

    public function getAll()
    {
        return showtime::all();
    }
    public function createShowtime(Request $req){
        
       $target = showtime::create($req->except('_token'));

       return true;
  }

    public function findShowtimes($id){
          return showtime::where('cinemaId',$id)->get();
    }
}
