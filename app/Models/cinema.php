<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use showtime;

class cinema extends Model
{
    use HasFactory;

    public function showtime()
    {
    	return $this->hasMany(showtime::class, 'cinemaId','id');
    }

}
