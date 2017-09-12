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
            'id' => '3c530309-58c0-4ca8-8d17-559e03cfd89f',
            'name' => 'KPMG',
            'email' => 'kpmg@gmail.com',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'id' => 'c4136b6b-fa8a-4310-b6ba-9796de38f7f4',
            'name' => 'Telstra',
            'email' => 'telstra@live.com',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'id' => '5f21384a-a3f0-4cde-8d3a-f5ee33b8cf36',
            'name' => 'Accenture',
            'email' => 'accenture@gmail.com',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'id' => '16c4200e-a25f-4ec9-a484-a62dd294857a',
            'name' => 'IBM',
            'email' => 'ibm@gmail.com',
            'password' => bcrypt('secret')
        ]);
        
        DB::table('employers')->insert([
            'id' => '05210bc3-5ffd-4f6f-810f-5c4bb1326cbe',
            'name' => 'Medibank',
            'email' => 'medibank@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
