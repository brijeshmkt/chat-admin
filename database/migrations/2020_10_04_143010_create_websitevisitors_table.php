<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitevisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websitevisitors', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('user_id');
            $table->boolean('status')->default(0);
            $table->string('uniqueId')->nullable();
            $table->string('page')->nullable();
            $table->string('city')->nullable();
            $table->string('country_name')->nullable();
            $table->string('ip')->nullable();
            $table->string('region')->nullable();
            $table->string('timezone')->nullable();
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
        Schema::dropIfExists('websitevisitors');
    }
}
