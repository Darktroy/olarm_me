<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardsHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards_holders', function(Blueprint $table)
        {
            $table->increments('card_holder_id');
            $table->timestamps();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('name', 255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards_holders');
    }
}
