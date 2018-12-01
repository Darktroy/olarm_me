<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecentActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recent_activities', function(Blueprint $table)
        {
            $table->increments('recent_activity_id');
            $table->timestamps();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('action_by_user_id')->unsigned()->nullable()->index();
            $table->string('description', 1000)->nullable();
            $table->string('profile_image_url')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recent_activities');
    }
}
