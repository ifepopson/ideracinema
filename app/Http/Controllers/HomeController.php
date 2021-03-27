<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\cinema;
use App\Models\showtime;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $cinemas = cinema::all();

        $total = ['cinemas' => $cinemas];

        return view('welcome',$total);
    }

    public function viewShowtime($id){

        $showtimes = showtime::where('cinemaId',$id)->get();

        $total = ['showtimes' => $showtimes];

        return view('viewShowtime',$total);
    }
}
