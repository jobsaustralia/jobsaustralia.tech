<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'bob smith',
            'email' => 'bobsmith@gmail.com',
            'password' => bcrypt('secret'),
			'title' => 'business analyst',
            'sector' => 'information technology',
            'state' => 'victoria',
            'city' => 'melbourne',
            'experience' => '3',
			'java' => '0',
            'python' => '0',
            'c' => '0',
            'csharp' => '0',
            'cplus' => '0',
            'php' => '0',
            'html' => '0',
            'css' => '0',
            'javascript' => '0',
            'sql' => '0',
            'unix' => '0',
            'winserver' => '0',
            'windesktop' => '0',
            'linuxdesktop' => '0',
            'macosdesktop' => '0',
            'pearl' => '0',
            'bash' => '0',
            'batch' => '0',
            'cisco' => '0',
            'office' => '0',
            'r' => '0',
            'go' => '0',
            'ruby' => '0',
            'asp' => '0',
            'scala' => '0'
        ]);
    }
}