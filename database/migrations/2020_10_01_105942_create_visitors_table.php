<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->boolean('status')->default(0);
            $table->string('uniqueId');
            $table->string('city')->nullable();
            $table->string('country_name')->nullable();
            $table->string('ip')->nullable();
            $table->string('region')->nullable();
            $table->string('timezone')->nullable();


            

            $table->timestamps();
        });

        DB::table('visitors')->insert([
            'user_id' => 2,
            'name' => 'Tushar',
            'uniqueId' => '102111741607020530'
        ]);

         DB::table('visitors')->insert([
            'user_id' => 2,
            'name' => 'pradeep',
            'uniqueId' => '102111741607020531'
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
