<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use App\Models\showtime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class showtimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for($i=0;$i<5;$i++){
            DB::table('showtimes')->insert([
                'cinemaId' => 1,
                'category' => Str::random(6).' ',
                'showTime' => Str::random(14).' 2021',
                'title' => Str::random(6).'',
            ]);
        }
        
    }
}
