<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            'brand' => 'Yamaha',
            'type' => 'RF50',
            'course_id' => 1,
            'status' => 'ready to race'

        ]); 
        DB::table('carts')->insert([
            'brand' => 'Yamaha',
            'type' => 'RF51',
            'course_id' => 2,
            'status' => 'ready to race'
            
        ]);
        DB::table('carts')->insert([
            'brand' => 'Yamaha',
            'type' => 'RF52',
            'course_id' => 3,
            'status' => 'Reperatie'
        ]); 
    }
}
