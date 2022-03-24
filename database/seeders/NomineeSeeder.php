<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NomineeSeeder extends Seeder
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
        DB::table('evoting_nominees')->truncate();

        DB::table('evoting_nominees')->delete();

        DB::table('evoting_nominees')->insert(array(
            array(
                'name' => 'Nominee 1',
            ),
            array(
                'name' => 'Nominee 2',
            ),
            array(
                'name' => 'Nominee 3',
            ),
            array(
                'name' => 'Nominee 4',
            ),
            array(
                'name' => 'Nominee 5',
            ),
            array(
                'name' => 'Nominee 6',
            ),
            array(
                'name' => 'Nominee 7',
            ),
            array(
                'name' => 'Nominee 8',
            ),
            array(
                'name' => 'Nominee 9',
            ),
            array(
                'name' => 'Nominee 10',
            ),
            array(
                'name' => 'Nominee 11',
            ),
            array(
                'name' => 'Nominee 12',
            ),
            array(
                'name' => 'Nominee 13',
            ),
            array(
                'name' => 'Nominee 14',
            ),
            array(
                'name' => 'Nominee 15',
            ),
            array(
                'name' => 'Nominee 16',
            ),
            array(
                'name' => 'Nominee 17',
            ),
            array(
                'name' => 'Nominee 18',
            ),
            array(
                'name' => 'Nominee 19',
            ),
            array(
                'name' => 'Nominee 20',
            ),
        ));
    }
}
