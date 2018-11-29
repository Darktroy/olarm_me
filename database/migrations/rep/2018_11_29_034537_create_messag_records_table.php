<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messag_records', function(Blueprint $table)
        {
            $table->increments('messag_record_id');
            $table->timestamps();
            $table->string('email')->nullable();
            $table->string('title_of_message')->nullable();
            $table->string('message', 1000)->nullable();
            $table->integer('user_id')->unsigned()->nullable()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messag_records');
    }
}
