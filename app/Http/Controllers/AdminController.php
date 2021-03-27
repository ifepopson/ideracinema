<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Repository\CinemaRepository;
use App\Http\Controllers\Repository\ShowtimeRepository;

use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    protected $cinema = null;
    protected $showtime = null;
    
    public function __construct(CinemaRepository $cinema,ShowtimeRepository $showtime)
    {
        $this->cinema = $cinema;
        $this->showtime = $showtime;
    }

    public function showTimePage(){

        $cinema = $this->cinema->getall();

        $data = ['cinemas' => $cinema];


        return view('addShowtime',$data);
    }

    public function pushShowTime(Request $req){


        $target = $this->showtime->createShowtime($req);


        return redirect()->back()->withInput()->withErrors("Showtime Added Successfully.");

    }

    public function signout(){
        Auth::logout();
        return redirect()->back()->withInput()->withErrors("Logged Out Successfully. See you soon.");

    }
}
