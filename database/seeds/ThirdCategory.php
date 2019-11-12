<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThirdCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_third_level')->insert(
            [
                [
                    'title'=>'3-й уровень. Категория 1',
                    'category_second_level_id'=>'1',
                    'created_at'=>'2019-11-12'
                ],

                [
                    'title'=>'3-й уровень. Категория 1',
                    'category_second_level_id'=>'2',
                    'created_at'=>'2019-11-12'
                ],
                [
                    'title'=>'3-й уровень. Категория 2',
                    'category_second_level_id'=>'2',
                    'created_at'=>'2019-11-12'
                ],

                [
                    'title'=>'3-й уровень. Категория 1',
                    'category_second_level_id'=>'3',
                    'created_at'=>'2019-11-12'
                ],
                [
                    'title'=>'3-й уровень. Категория 2',
                    'category_second_level_id'=>'3',
                    'created_at'=>'2019-11-12'
                ],
                [
                    'title'=>'3-й уровень. Категория 2',
                    'category_second_level_id'=>'3',
                    'created_at'=>'2019-11-12'
                ]

            ]);
    }
}
