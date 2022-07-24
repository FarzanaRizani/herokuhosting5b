<?php

use Illuminate\Database\Seeder;
use App\LecturerGroup;

class LecturerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturergroup_seed = [
            ['id'=>'1','name'=>'CS2515B','part' => '5'],
            ['id'=>'2','name'=>'CS2515B','part' => '5'],
            ['id'=>'3','name'=>'CS2515B','part' => '5'],
            ['id'=>'4','name'=>'CS2515B','part' => '5'],
            ['id'=>'5','name'=>'CS2515B','part' => '5'],
            ];

            foreach ($lecturergroup_seed as $lecturergroup_seed)
            {
                LecturerGroup::firstOrCreate($lecturergroup_seed);
            }
    }
}
