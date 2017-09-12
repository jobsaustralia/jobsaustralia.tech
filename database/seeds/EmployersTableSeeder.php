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
            'id' => 'db930f90-17a8-468a-b094-7416f0c63e99',
            'name' => 'KPMG',
            'email' => 'kpmg@gmail.com',
            'state' => 'vic',
            'city' => 'Melbourne',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'id' => '7c8b051d-62d7-4250-b679-4ffffc2d1d5f',
            'name' => 'Telstra',
            'email' => 'telstra@live.com',
            'state' => 'vic',
            'city' => 'Melbourne',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'id' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
            'name' => 'Accenture',
            'email' => 'accenture@gmail.com',
            'state' => 'vic',
            'city' => 'Melbourne',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'id' => '5ed27969-c2cc-4d02-b7f6-c1bf0b19d613',
            'name' => 'IBM',
            'email' => 'ibm@gmail.com',
            'state' => 'vic',
            'city' => 'Melbourne',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'id' => '593e4d9f-e71e-468f-b38a-572afd5ba2f7',
            'name' => 'Medibank',
            'email' => 'medibank@gmail.com',
            'state' => 'vic',
            'city' => 'Melbourne',
            'password' => bcrypt('secret')
        ]);
    }
}
