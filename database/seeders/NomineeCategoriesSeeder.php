<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NomineeCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('evoting_nominee_categories')->truncate();

        DB::table('evoting_nominee_categories')->delete();

        DB::table('evoting_nominee_categories')->insert(array(
            array(
                'evoting_category_id' => 1,
                'evoting_nominee_id' => 1,
                'code' => "1001"
            ),
            array(
                'evoting_category_id' => 1,
                'evoting_nominee_id' => 2,
                'code' => "1002",
            ),
            array(
                'evoting_category_id' => 1,
                'evoting_nominee_id' => 3,
                'code' => "1003",
            ),
            array(
                'evoting_category_id' => 1,
                'evoting_nominee_id' => 4,
                'code' => "1004",
            ),
            array(
                'evoting_category_id' => 1,
                'evoting_nominee_id' => 5,
                'code' => "1005",
            ),
            array(
                'evoting_category_id' => 2,
                'evoting_nominee_id' => 6,
                'code' => "2006",
            ),
            array(
                'evoting_category_id' => 2,
                'evoting_nominee_id' => 7,
                'code' => "2007",
            ),
            array(
                'evoting_category_id' => 2,
                'evoting_nominee_id' => 8,
                'code' => "2008",
            ),
            array(
                'evoting_category_id' => 3,
                'evoting_nominee_id' => 9,
                'code' => "3009",
            ),
            array(
                'evoting_category_id' => 3,
                'evoting_nominee_id' => 10,
                'code' => "3010",
            ),
            array(
                'evoting_category_id' => 3,
                'evoting_nominee_id' => 11,
                'code' => "3011",
            ),
            array(
                'evoting_category_id' => 4,
                'evoting_nominee_id' => 12,
                'code' => "4012",
            ),
            array(
                'evoting_category_id' => 4,
                'evoting_nominee_id' => 13,
                'code' => "4013",
            ),
            array(
                'evoting_category_id' => 4,
                'evoting_nominee_id' => 14,
                'code' => "4014",
            ),
            array(
                'evoting_category_id' => 5,
                'evoting_nominee_id' => 15,
                'code' => "5015",
            ),
            array(
                'evoting_category_id' => 5,
                'evoting_nominee_id' => 16,
                'code' => "5016",
            ),
            array(
                'evoting_category_id' => 5,
                'evoting_nominee_id' => 17,
                'code' => "5017",
            ),
            array(
                'evoting_category_id' => 6,
                'evoting_nominee_id' => 18,
                'code' => "6018",
            ),
            array(
                'evoting_category_id' => 6,
                'evoting_nominee_id' => 19,
                'code' => "6019",
            ),
            array(
                'evoting_category_id' => 7,
                'evoting_nominee_id' => 20,
                'code' => "7020",
            )
        ));
    }
}
