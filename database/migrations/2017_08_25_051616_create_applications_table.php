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
            $table->uuid('id')->unique();
            $table->primary('id');

            $table->uuid('userid');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');

            $table->uuid('employerid');
            $table->foreign('employerid')->references('id')->on('employers')->onDelete('cascade');

            $table->uuid('jobid');
            $table->foreign('jobid')->references('id')->on('jobs')->onDelete('cascade');

            $table->text('message');

            $table->boolean('rejected')->default(0);

            $table->boolean('engaged')->default(0);

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
