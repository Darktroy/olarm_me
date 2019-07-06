<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCardRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_card_reminders', function(Blueprint $table)
        {
            $table->timestamps();
            $table->integer('user_card_reminder_id')->unsigned()->nullable()->index();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('card_id')->unsigned()->nullable()->index();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('reminder')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_card_reminders');
    }
}
