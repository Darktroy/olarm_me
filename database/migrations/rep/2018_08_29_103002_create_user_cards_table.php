<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cards', function(Blueprint $table)
        {
            $table->increments('user_card_id');
            $table->timestamps();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('card_holder_id')->unsigned()->nullable()->index();
            $table->integer('card_id')->unsigned()->nullable()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_cards');
    }
}
