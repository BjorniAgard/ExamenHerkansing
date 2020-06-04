<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            CourseTableSeeder::class,
            CartTableSeeder::class,
            UserCourseTableSeeder::class
        ]);
    }
}
