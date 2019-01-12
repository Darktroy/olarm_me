<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_signatures', function(Blueprint $table)
        {
            $table->increments('emailSignature_id');
            $table->timestamps();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('imageName')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('email_signatures');
    }
}
