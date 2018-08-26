<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function(Blueprint $table)
        {
            $table->increments('card_id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('privacy')->length(11);
            $table->string('company_name');
            $table->string('position')->length(64);
            $table->string('cell_phone_number');
            $table->string('landline');
            $table->string('fax')->nullable();
            $table->string('website_url')->nullable();
            $table->string('about_me')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards');
    }
}
