<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardToInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_to_interests', function(Blueprint $table)
        {
            $table->increments('card_to_interest_id');
            $table->timestamps();
            $table->integer('interest_id')->unsigned()->nullable()->index();
            $table->string('name', 255)->nullable();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('private')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('card_to_interests');
    }
}
