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
            $table->string('title');
            $table->string('sector');
            $table->string('state');
            $table->string('city');
            $table->integer('experience');
            
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
