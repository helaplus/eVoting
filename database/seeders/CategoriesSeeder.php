<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
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
        DB::table('evoting_categories')->truncate();

        DB::table('evoting_categories')->delete();

        DB::table('evoting_categories')->insert(array(
            array(
                'name' => 'Male Artist of the Year',
            ),
            array(
                'name' => 'Female Artist of the Year',
            ),
            array(
                'name' => 'Song of the Year',
            ),
            array(
                'name' => 'New Artist of the Year',
            ),
            array(
                'name' => 'Hiphop Song of the Year',
            ),
            array(
                'name' => 'Reggae/Ragga Song of the Year',
            ),
            array(
                'name' => 'Praise and worship song of the Year',
            ),
            array(
                'name' => 'Dance Group of the Year',
            )
        ));
    }
}
