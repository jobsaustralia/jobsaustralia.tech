<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ApplicationsTableSeeder extends Seeder{
    public function run(){
    DB::table('applications')->insert([
        'id' => 'b534d13c-1cad-4490-ae4e-4a422fc65129',
        'userid' => '2f9e1caf-7408-4535-a376-bdfd89767845',
        'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
        'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
        'message' => 'The quick brown fox jumps over the lazy dog.'
    ]);

    DB::table('applications')->insert([
        'id' => 'dab6afc8-8c7b-46c9-83ba-925391601c5b',
        'userid' => 'a4ca6a90-c70e-4035-b019-b8a09949c913',
        'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
        'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
        'message' => 'The quick brown dog jumps over the lazy fox.'
    ]);

    DB::table('applications')->insert([
        'id' => 'e3b574ab-cabf-42d1-8924-2b67235ea124',
        'userid' => '4238b75b-034c-4c80-92f1-0188a03806df',
        'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
        'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
        'message' => 'The slow brown fox jumps over the lazy dog.'
    ]);

    DB::table('applications')->insert([
        'id' => '8734ae0e-3b9c-4bd8-b532-faa2511c37ad',
        'userid' => 'c033ac4a-4a33-4790-a380-1f84a708193c',
        'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
        'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
        'message' => 'The confident brown fox leaps over the lazy dog.'
    ]);

    DB::table('applications')->insert([
        'id' => '66c52a9c-8fe4-4957-b4fb-85595fecaac9',
        'userid' => 'b91da612-2d95-4363-90e5-1908be164fbf',
        'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
        'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
        'message' => 'The unsure brown fox turns around and goes home.'
    ]);

    DB::table('applications')->insert([
        'id' => '80a90748-3c4b-49cb-93aa-cf85fd78f458',
        'userid' => '9dbfbe3f-d151-4be6-8cba-730afeb971fc',
        'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
        'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
        'message' => 'The hungry brown fox eats the lazy dog.'
    ]);
    }
}
