<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvitationContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitation_contacts', function(Blueprint $table)
        {
            $table->increments('invitation_contacts_id');
            $table->timestamps();
            $table->string('phonecode')->nullable();
            $table->string('phone')->nullable();
            $table->integer('invited_user_id')->unsigned()->nullable()->index();
            $table->string('invitation_code')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invitation_contacts');
    }
}
