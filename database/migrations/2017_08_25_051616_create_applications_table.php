<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');

            $table->integer('employerid')->unsigned();
            $table->foreign('employerid')->references('id')->on('employers')->onDelete('cascade');

            $table->integer('jobid')->unsigned();
            $table->foreign('jobid')->references('id')->on('jobs')->onDelete('cascade');

            $table->text('message');

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
        Schema::table('applications', function (Blueprint $table) {
            Schema::dropIfExists('applicants');
        });
    }
}
