<?php

use Illuminate\Database\Seeder;

class UserCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_courses')->insert([
            'user_id' => 1,
            'course_id' => 1,
            'start_date' => "2020-04-03",
            'end_date' => "2020-05-06"
        ]);

        DB::table('users_courses')->insert([
            'user_id' => 2,
            'course_id' => 2,
            'start_date' => "2020-04-03",
            'end_date' => "2020-05-06"
            
        ]);

        DB::table('users_courses')->insert([
            'user_id' => 3,
            'course_id' => 1,
            'start_date' => "2020-04-03",
            'end_date' => "2020-05-06"
        ]);
    }
}
