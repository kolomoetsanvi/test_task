<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecondCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_second_level')->insert(
            [
                [
                    'title'=>'2-й уровень. Категория 1',
                    'category_first_level_id'=>'2',
                    'created_at'=>'2019-11-12'
                ],

                [
                    'title'=>'2-й уровень. Категория 1',
                    'category_first_level_id'=>'3',
                    'created_at'=>'2019-11-12'
                ],
                [
                    'title'=>'2-й уровень. Категория 2',
                    'category_first_level_id'=>'3',
                    'created_at'=>'2019-11-12'
                ]

            ]);
    }
}
