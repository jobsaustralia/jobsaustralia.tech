<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EmployersTableSeeder extends Seeder{
    public function run(){
        DB::table('employers')->insert([
            'id' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
            'name' => 'Royal Melbourne Institute of Employment',
            'email' => 'info@rmit.dev',
            'state' => 'vic',
            'city' => 'Melbourne',
            'notifyapply' => 0,
            'notifymarketing' => 0,
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => 'db930f90-17a8-468a-b094-7416f0c63e99',
            'name' => 'Cayman Islands Auditing',
            'email' => 'admin@caymenaudits.dev',
            'state' => 'vic',
            'city' => 'Melbourne',
            'notifyapply' => 0,
            'notifymarketing' => 0,
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '7c8b051d-62d7-4250-b679-4ffffc2d1d5f',
            'name' => 'Republic Bank',
            'email' => 'admin@republic.dev',
            'state' => 'nsw',
            'city' => 'Sydney',
            'notifyapply' => 0,
            'notifymarketing' => 0,
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '5ed27969-c2cc-4d02-b7f6-c1bf0b19d613',
            'name' => 'Seeds Australia',
            'email' => 'admin@seed.dev',
            'state' => 'nsw',
            'city' => 'Wollongong',
            'notifyapply' => 0,
            'notifymarketing' => 0,
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '593e4d9f-e71e-468f-b38a-572afd5ba2f7',
            'name' => 'Eddison Motors',
            'email' => 'info@edison.dev',
            'state' => 'wa',
            'city' => 'Broome',
            'notifyapply' => 0,
            'notifymarketing' => 0,
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '753056e2-8123-4904-8f80-3f9a990e0d8b',
            'name' => 'Yarra River Pollution Commission',
            'email' => 'info@yrphruwc.dev',
            'state' => 'vic',
            'city' => 'Melbourne',
            'notifyapply' => 0,
            'notifymarketing' => 0,
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '5f721744-eac8-42e6-8e1b-b7a9d9e1a61d',
            'name' => 'Micro Software Solutions',
            'email' => 'info@microsoftware.dev',
            'state' => 'sa',
            'city' => 'Adelaide',
            'notifyapply' => 0,
            'notifymarketing' => 0,
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '3d7fb46d-489c-402e-b995-db4d3d158eb5',
            'name' => 'Solar and Wind Mining Company',
            'email' => 'contact@solarandwindintheground.dev',
            'state' => 'nt',
            'city' => 'Darwin',
            'notifyapply' => 0,
            'notifymarketing' => 0,
            'password' => bcrypt('secret')
        ]);

        DB::table('employers')->insert([
            'id' => '2ab33988-7dc4-4f39-ab38-bbc8343d77b3',
            'name' => 'Heat Adversion Group',
            'email' => 'info@itstoohot.dev',
            'state' => 'qld',
            'city' => 'Brisbane',
            'notifyapply' => 0,
            'notifymarketing' => 0,
            'password' => bcrypt('secret')
        ]);
    }
}
