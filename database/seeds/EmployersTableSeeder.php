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
<<<<<<< HEAD
            'id' => '3c530309-58c0-4ca8-8d17-559e03cfd89f',
            'name' => 'KPMG',
            'email' => 'kpmg@gmail.com',
=======
            'id' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
            'name' => 'Royal Melbourne Institute of Tetanus Shots',
            'email' => 'info@rmit.dev',
            'state' => 'vic',
            'city' => 'Melbourne',
>>>>>>> origin/master
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => 'db930f90-17a8-468a-b094-7416f0c63e99',
            'name' => 'Cayman Islands Auditing',
            'email' => 'admin@caymenaudits.dev',
            'state' => 'vic',
            'city' => 'Melbourne',
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '7c8b051d-62d7-4250-b679-4ffffc2d1d5f',
            'name' => 'Republic Bank',
            'email' => 'admin@republic.dev',
            'state' => 'nsw',
            'city' => 'Sydney',
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '5ed27969-c2cc-4d02-b7f6-c1bf0b19d613',
            'name' => 'Snotflix Australia',
            'email' => 'admin@snotflix.dev',
            'state' => 'nsw',
            'city' => 'Wollongong',
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '593e4d9f-e71e-468f-b38a-572afd5ba2f7',
            'name' => 'Eddison Motors',
            'email' => 'info@edison.dev',
            'state' => 'wa',
            'city' => 'Broome',
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
<<<<<<< HEAD
            'id' => 'c4136b6b-fa8a-4310-b6ba-9796de38f7f4',
            'name' => 'Telstra',
            'email' => 'telstra@live.com',
=======
            'id' => '753056e2-8123-4904-8f80-3f9a990e0d8b',
            'name' => 'Yarra River Pollution (Human Remains and other Unwanted Waste) Commission',
            'email' => 'info@yrphruwc.dev',
            'state' => 'vic',
            'city' => 'Melbourne',
>>>>>>> origin/master
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
<<<<<<< HEAD
            'id' => '5f21384a-a3f0-4cde-8d3a-f5ee33b8cf36',
            'name' => 'Accenture',
            'email' => 'accenture@gmail.com',
=======
            'id' => '5f721744-eac8-42e6-8e1b-b7a9d9e1a61d',
            'name' => 'Micro Software Solutions',
            'email' => 'info@microsoftware.dev',
            'state' => 'sa',
            'city' => 'Adelaide',
>>>>>>> origin/master
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
<<<<<<< HEAD
            'id' => '16c4200e-a25f-4ec9-a484-a62dd294857a',
            'name' => 'IBM',
            'email' => 'ibm@gmail.com',
=======
            'id' => '3d7fb46d-489c-402e-b995-db4d3d158eb5',
            'name' => 'Solar and Wind Mining Company',
            'email' => 'contact@solarandwindintheground.dev',
            'state' => 'nt',
            'city' => 'Darwin',
>>>>>>> origin/master
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
<<<<<<< HEAD
            'id' => '05210bc3-5ffd-4f6f-810f-5c4bb1326cbe',
            'name' => 'Medibank',
            'email' => 'medibank@gmail.com',
=======
            'id' => '2ab33988-7dc4-4f39-ab38-bbc8343d77b3',
            'name' => 'Heat Adversion Group',
            'email' => 'info@itstoohot.dev',
            'state' => 'qld',
            'city' => 'Brisbane',
>>>>>>> origin/master
            'password' => bcrypt('secret')
        ]);
    }
}
