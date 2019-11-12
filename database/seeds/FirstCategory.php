<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FirstCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_first_level')->insert(
            [
                [
                    'title'=>'1-й уровень. Категория 1',
                    'created_at'=>'2019-11-12'
                ],
                [
                    'title'=>'1-й уровень. Категория 2',
                    'created_at'=>'2019-11-12'
                ],
                [
                    'title'=>'1-й уровень. Категория 3',
                    'created_at'=>'2019-11-12'
                ]

            ]);
    }
}
