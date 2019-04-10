<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQrCodeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qr_code_users', function(Blueprint $table)
        {
            $table->increments('qr_code_user_id');
            $table->timestamps();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('card_id')->unsigned()->nullable()->index();
            $table->integer('code')->unsigned()->nullable()->unique();
            $table->dateTime('begain_at')->nullable();
            $table->dateTime('ended_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('qr_code_users');
    }
}
