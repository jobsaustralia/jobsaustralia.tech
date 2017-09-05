<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EmployersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employers')->insert([
            'name' => 'kpmg',
            'email' => 'kpmg@gmail.com',
            'password' => bcrypt('secret')
        ]);
		
		DB::table('employers')->insert([
            'name' => 'telstra',
            'email' => 'telstra@live.com',
            'password' => bcrypt('secret')
        ]);
		
		DB::table('employers')->insert([
            'name' => 'accenture',
            'email' => 'accenture@gmail.com',
            'password' => bcrypt('secret')
        ]);
		
		DB::table('employers')->insert([
            'name' => 'ibm',
            'email' => 'ibm@gmail.com',
            'password' => bcrypt('secret')
        ]);
		
		DB::table('employers')->insert([
            'name' => 'medibank',
            'email' => 'medibank@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}