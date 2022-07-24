<?php

use Illuminate\Database\Seeder;
use App\Hall;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hall_seed = [
            ['id'=>'1','lecture_hall_name'=>'Hall 1','lecture_hall_place'=>'Building 1'],
            ['id'=>'2','lecture_hall_name'=>'Hall 2','lecture_hall_place'=>'Building 2'],
            ['id'=>'3','lecture_hall_name'=>'Hall 3','lecture_hall_place'=>'Building 3'],
            ['id'=>'4','lecture_hall_name'=>'Hall 4','lecture_hall_place'=>'Building 4'],
            ['id'=>'5','lecture_hall_name'=>'Hall 5','lecture_hall_place'=>'Building 5'],
            ];

            foreach ($hall_seed as $hall_seed)
            {
                Hall::firstOrCreate($hall_seed);
            }

    }
}
