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
    }
}
