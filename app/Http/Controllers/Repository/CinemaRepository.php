<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;

use App\Models\cinema;

class CinemaRepository
{
    //
    public function getAll()
    {
        return cinema::all();
    }
}
