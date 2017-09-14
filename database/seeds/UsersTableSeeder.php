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
            'id' => '2f9e1caf-7408-4535-a376-bdfd89767845',
            'name' => 'Aaron Horler',
            'email' => 'aaron@aaronhorler.dev',
            'password' => bcrypt('secret'),
            'title' => 'Student',
            'sector' => 'Information Technology',
            'state' => 'vic',
            'city' => 'Mordialloc',
            'experience' => 2,
            'java' => 1,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 1,
            'html' => 1,
            'css' => 1,
            'javascript' => 1,
            'sql' => 1,
            'unix' => 1,
            'winserver' => 1,
            'windesktop' => 1,
            'linuxdesktop' => 1,
            'macosdesktop' => 1,
            'pearl' => 0,
            'bash' => 1,
            'batch' => 1,
            'cisco' => 1,
            'office' => 1,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0
        ]);

        DB::table('users')->insert([
<<<<<<< HEAD
            'id' => '0e98767b-dacb-4999-bf9e-97a477ab835d',
=======
            'id' => 'a4ca6a90-c70e-4035-b019-b8a09949c913',
>>>>>>> origin/master
            'name' => 'Bob Smith',
            'email' => 'bobsmith@gmail.com',
            'password' => bcrypt('secret'),
            'title' => 'Business analyst',
            'sector' => 'Information Technology',
            'state' => 'vic',
            'city' => 'Melbourne',
            'experience' => 3,
            'java' => 0,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0
        ]);
        
        DB::table('users')->insert([
<<<<<<< HEAD
            'id' => '325308a1-5697-4656-861f-b250ea5d69cc',
=======
            'id' => '4238b75b-034c-4c80-92f1-0188a03806df',
>>>>>>> origin/master
            'name' => 'Dean Winchester',
            'email' => 'deanwinchester@live.com',
            'password' => bcrypt('secret'),
            'title' => 'Programmer',
            'sector' => 'Information Technology',
            'state' => 'wa',
            'city' => 'Perth',
            'experience' => 2,
            'java' => 0,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0
        ]);
        
        DB::table('users')->insert([
<<<<<<< HEAD
            'id' => '75654176-de65-4cab-9f24-646762f27de0',
=======
            'id' => 'c033ac4a-4a33-4790-a380-1f84a708193c',
>>>>>>> origin/master
            'name' => 'Kara Danvers',
            'email' => 'karad@gmail.com',
            'password' => bcrypt('secret'),
            'title' => 'Software Developer',
            'sector' => 'Information Technology',
            'state' => 'sa',
            'city' => 'adelaide',
            'experience' => 5,
            'java' => 0,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0
        ]);
        
        DB::table('users')->insert([
<<<<<<< HEAD
            'id' => 'ed914be7-e220-4d9c-beb7-e38c4bffd570',
=======
            'id' => 'b91da612-2d95-4363-90e5-1908be164fbf',
>>>>>>> origin/master
            'name' => 'Alec Lightwood',
            'email' => 'alightwood@gmail.com',
            'password' => bcrypt('secret'),
            'title' => 'Consultant',
            'sector' => 'Information Technology',
            'state' => 'vic',
            'city' => 'Melbourne',
            'experience' => 4,
            'java' => 0,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0
        ]);
        
        DB::table('users')->insert([
<<<<<<< HEAD
            'id' => 'e00f73aa-b92e-4a56-b7eb-a21eeb19a7ae',
=======
            'id' => '9dbfbe3f-d151-4be6-8cba-730afeb971fc',
>>>>>>> origin/master
            'name' => 'Jillian Banks',
            'email' => 'jillianbanks@gmail.com',
            'password' => bcrypt('secret'),
            'title' => 'Project Manager',
            'sector' => 'Information Technology',
            'state' => 'vic',
            'city' => 'Melbourne',
            'experience' => 1,
            'java' => 0,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0
        ]);
    }
}
