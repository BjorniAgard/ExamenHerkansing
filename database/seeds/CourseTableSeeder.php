<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'Cursus 1',
            'description' => 'Dit is cursus 1',
            'price' => 22,
        ]);
        DB::table('courses')->insert([
            'title' => 'Cursus 2',
            'description' => 'Dit is cursus 2',
            'price' => 45,
        ]);
        DB::table('courses')->insert([
            'title' => 'Cursus 3',
            'description' => 'Dit is cursus 3',
            'price' => 50,
        ]);
    }
}
