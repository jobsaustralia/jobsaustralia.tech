<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('job-title');
            $table->string('sector');
            $table->string('overall-exp');
            
            /* Skills */
            $table->string('java');
            $table->string('python');
            $table->string('c');
            $table->string('c-sharp');
            $table->string('c-plus');
            $table->string('php');
            $table->string('html');
            $table->string('css');
            $table->string('javascript');
            $table->string('sql');
            $table->string('unix');
            $table->string('win-server');
            $table->string('win-desktop');
            $table->string('linux-desktop');
            $table->string('macos-desktop');
            $table->string('pearl');
            $table->string('bash');
            $table->string('batch');
            $table->string('cisco');
            $table->string('microsoft-office');
            $table->string('r');
            $table->string('go');
            $table->string('ruby');
            $table->string('asp');
            $table->string('scala');

            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
