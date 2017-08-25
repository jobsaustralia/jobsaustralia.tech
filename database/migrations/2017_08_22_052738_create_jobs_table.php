<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('hours');
            $table->string('salary');
            $table->string('availablefrom');
            $table->string('location');
            $table->string('startdate');

            /* Skills */
            $table->boolean('java');
            $table->boolean('python');
            $table->boolean('c');
            $table->boolean('csharp');
            $table->boolean('cplus');
            $table->boolean('php');
            $table->boolean('html');
            $table->boolean('css');
            $table->boolean('javascript');
            $table->boolean('sql');
            $table->boolean('unix');
            $table->boolean('winserver');
            $table->boolean('windesktop');
            $table->boolean('linuxdesktop');
            $table->boolean('macosdesktop');
            $table->boolean('pearl');
            $table->boolean('bash');
            $table->boolean('batch');
            $table->boolean('cisco');
            $table->boolean('office');
            $table->boolean('r');
            $table->boolean('go');
            $table->boolean('ruby');
            $table->boolean('asp');
            $table->boolean('scala');

            $table->integer('employerid')->unsigned();
            $table->foreign('employerid')->references('id')->on('employers');

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
        Schema::dropIfExists('jobs');
    }
}
