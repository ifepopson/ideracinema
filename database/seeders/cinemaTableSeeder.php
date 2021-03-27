<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\cinema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class cinemaTableSeeder extends Seeder
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
            DB::table('cinemas')->insert([
                'name' => Str::random(10). ' Cinema',
                'location' => Str::random(6).' Nigeria',
            ]);
        }
       
    }
}
