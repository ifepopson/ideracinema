<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\cinema;

class showtime extends Model
{
    use HasFactory;

    public $fillable = ['cinemaId','showTime','title','category'];

    public function cinema()
    {
    	return $this->hasOne(cinema::class, 'id','cinemaId');
    }
}
