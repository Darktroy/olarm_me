<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function(Blueprint $table)
        {
            $table->increments('profile_id');
            $table->timestamps();
            $table->integer('user_id')->unsigned()->unique();
            $table->string('picture')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('field')->nullable();
            $table->string('industry')->nullable();
            $table->string('specialty')->nullable();
            $table->string('privacy')->nullable();
            $table->integer('template_layout_id')->unsigned()->nullable()->index();
            $table->string('logo')->nullable();
            $table->string('about')->nullable();
            $table->string('alias')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('youtube_url')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
