<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountariesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countaries_details', function(Blueprint $table)
        {
            $table->increments('countariesDetails_id');
            $table->timestamps();
            $table->string('countaryName')->nullable();
            $table->string('cityName')->nullable();
            $table->string('district')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countaries_details');
    }
}
