<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElectionSeeder extends Seeder
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
        DB::table('evoting_elections')->truncate();

        DB::table('evoting_elections')->delete();

        DB::table('evoting_elections')->insert(array(
            array(
                'name' => 'Sample Awards',
            )
        ));
    }
}
