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
            'name' => 'KPMG',
            'email' => 'kpmg@gmail.com',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'name' => 'Telstra',
            'email' => 'telstra@live.com',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'name' => 'Accenture',
            'email' => 'accenture@gmail.com',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'name' => 'IBM',
            'email' => 'ibm@gmail.com',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'name' => 'Medibank',
            'email' => 'medibank@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
