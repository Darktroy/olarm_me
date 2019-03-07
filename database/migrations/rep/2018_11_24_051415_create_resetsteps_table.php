<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResetstepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resetsteps', function(Blueprint $table)
        {
            $table->increments('resetsteps_id');
            $table->timestamps();
            $table->string('email')->nullable();
            $table->string('confirmation_code')->nullable();
            $table->string('confirmation_link')->nullable();
            $table->string('temp_pass')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resetsteps');
    }
}
