<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => 'Livy',
            'gender' => 'male',
            'biography' => 'Livy was born Titus Livus in either 59 BCE or 64 BCE in Patavium, which is now Padua, Italy. Back then, it was one of the richest cities in Italy and, although we can`t be sure, Livy`s family may have had some standing in the city itself.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('authors')->insert([
            'name' => 'Anna Komnene',
            'gender' => 'female',
            'biography' => 'commonly Latinized as Anna Comnena, was a Byzantine princess, scholar, physician, hospital administrator, and the first female historian.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
