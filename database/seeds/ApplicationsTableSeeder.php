<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('applications')->insert([
            'id' => 'b534d13c-1cad-4490-ae4e-4a422fc65129',
            'userid' => '2f9e1caf-7408-4535-a376-bdfd89767845',
            'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
            'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
            'message' => 'The quick brown fox jumps over the lazy dog.',   
        ]);

      DB::table('applications')->insert([
            'id' => 'b534d13c-1cad-4490-ae4e-4a422fc65129',
            'userid' => 'a4ca6a90-c70e-4035-b019-b8a09949c913',
            'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
            'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
            'message' => 'The quick brown dog jumps over the lazy fox.',   
        ]);

      DB::table('applications')->insert([
            'id' => '4238b75b-034c-4c80-92f1-0188a03806df',
            'userid' => '2f9e1caf-7408-4535-a376-bdfd89767845',
            'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
            'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
            'message' => 'The slow brown fox jumps over the lazy dog.',   
        ]);

      DB::table('applications')->insert([
            'id' => 'c033ac4a-4a33-4790-a380-1f84a708193c',
            'userid' => '2f9e1caf-7408-4535-a376-bdfd89767845',
            'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
            'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
            'message' => 'The confident brown fox leaps over the lazy dog.',   
        ]);

      DB::table('applications')->insert([
            'id' => 'b91da612-2d95-4363-90e5-1908be164fbf',
            'userid' => '2f9e1caf-7408-4535-a376-bdfd89767845',
            'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
            'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
            'message' => 'The unsure brown fox turns around and goes home.',   
        ]);

      DB::table('applications')->insert([
            'id' => '9dbfbe3f-d151-4be6-8cba-730afeb971fc',
            'userid' => '2f9e1caf-7408-4535-a376-bdfd89767845',
            'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d',
            'jobid' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
            'message' => 'The hungry brown fox eats the lazy dog.',   
        ]);
    }
}
