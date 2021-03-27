<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\cinema;
use App\Models\showtime;


use App\Http\Controllers\Repository\CinemaRepository;
use App\Http\Controllers\Repository\ShowtimeRepository;

class HomeController extends Controller
{
    protected $cinema = null;
    protected $showtime = null;
    
    public function __construct(CinemaRepository $cinema,ShowtimeRepository $showtime)
    {
        $this->cinema = $cinema;
        $this->showtime = $showtime;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $cinemas = $this->cinema->getall();

        $total = ['cinemas' => $cinemas];

        return view('welcome',$total);
    }

    public function viewShowtime($id){

        $showtimes = $this->showtime->findShowtimes($id);
      

        $total = ['showtimes' => $showtimes];

        return view('viewShowtime',$total);
    }

}
