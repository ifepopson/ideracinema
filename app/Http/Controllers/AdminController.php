<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cinema;
use App\Models\showtime;

class AdminController extends Controller
{
    //

    public function showTimePage(){

        $cinema = cinema::all();

        $data = ['cinemas' => $cinema];


        return view('addShowtime',$data);
    }

    public function pushShowTime(Request $req){


        $target = showtime::create($req->except('_token'));


        return redirect()->back()->withInput()->withErrors("Showtime Added Successfully.");

    }

    public function signout(){
        Auth::logout();
        return redirect()->back()->withInput()->withErrors("Logged Out Successfully. See you soon.");

    }
}
