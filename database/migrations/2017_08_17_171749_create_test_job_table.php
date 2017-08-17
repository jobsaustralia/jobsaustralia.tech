<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testjob', function (Blueprint $table) {
            // job id
			$table->increments('id');
			
			// match fields; 0 = unchecked, 1 = checked
			$table->integer('java');
            $table->integer('python');
            $table->integer('c');
            $table->integer('csharp');
            $table->integer('cplus');
            $table->integer('php');
            $table->integer('html');
            $table->integer('css');
            $table->integer('javascript');
            $table->integer('sql');
            $table->integer('unix');
            $table->integer('winserver');
            $table->integer('windesktop');
            $table->integer('linuxdesktop');
            $table->integer('macosdesktop');
            $table->integer('pearl');
            $table->integer('bash');
            $table->integer('batch');
            $table->integer('cisco');
            $table->integer('office');
            $table->integer('r');
            $table->integer('go');
            $table->integer('ruby');
            $table->integer('asp');
            $table->integer('scala');
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testjob');
    }
}
