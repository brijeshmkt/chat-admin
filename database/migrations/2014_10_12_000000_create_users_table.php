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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('fcm')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => 'Hemstad Admin',
            'email' => 'hemstadadmin@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        // DB::table('users')->insert([
        //     'name' => 'brijesh',
        //     'email' => 'brijeshmkt@gmail.com',
        //     'password' => Hash::make('123456'),
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'ramesh',
        //     'email' => 'ramesh@gmail.com',
        //     'password' => Hash::make('123456'),
        // ]);
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
