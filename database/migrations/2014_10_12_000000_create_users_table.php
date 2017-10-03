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
            $table->uuid('id')->unique();
            $table->primary('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('title');
            $table->string('sector');
            $table->string('state');
            $table->string('city');
            $table->integer('experience');
            $table->integer('education');
			$table->string('github')->nullable();

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
            $table->boolean('perl');
            $table->boolean('bash');
            $table->boolean('batch');
            $table->boolean('cisco');
            $table->boolean('office');
            $table->boolean('r');
            $table->boolean('go');
            $table->boolean('ruby');
            $table->boolean('asp');
            $table->boolean('scala');
            $table->boolean('cow');
            $table->boolean('actionscript');
            $table->boolean('assembly');
            $table->boolean('autohotkey');
            $table->boolean('coffeescript');
            $table->boolean('d');
            $table->boolean('fsharp');
            $table->boolean('haskell');
            $table->boolean('matlab');
            $table->boolean('objectivec');
            $table->boolean('objectivecplus');
            $table->boolean('pascal');
            $table->boolean('powershell');
            $table->boolean('rust');
            $table->boolean('swift');
            $table->boolean('typescript');
            $table->boolean('vue');
            $table->boolean('webassembly');
            $table->boolean('apache');
            $table->boolean('aws');
            $table->boolean('docker');
            $table->boolean('nginx');
            $table->boolean('saas');
            $table->boolean('ipv4');
            $table->boolean('ipv6');
            $table->boolean('dns');

            $table->boolean('notifynewjob')->default(1);
            $table->boolean('notifymarketing')->default(0);

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
