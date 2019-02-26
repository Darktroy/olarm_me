<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecommendedCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommended_cards', function(Blueprint $table)
        {
            $table->increments('recommendedCards_id');
            $table->timestamps();
            $table->integer('card_id')->unsigned()->nullable()->index();
            $table->integer('recommended_by_user_id')->unsigned()->nullable()->index();
            $table->integer('recommended_for_user_id')->unsigned()->nullable()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recommended_cards');
    }
}
