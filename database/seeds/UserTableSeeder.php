<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jaap',
            'email' => 'test@example.nl',
            'password' => 'test'
        ]);
        DB::table('users')->insert([
            'name' => 'Mike',
            'email' => 'Mike@example.nl',
            'password' => 'test'
        ]);
        DB::table('users')->insert([
            'name' => 'Robin',
            'email' => 'Robin@example.nl',
            'password' => 'test'
        ]);
    }
}
