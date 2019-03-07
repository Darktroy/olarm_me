<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function(Blueprint $table)
        {
            $table->increments('company_id');
            $table->timestamps();
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_landline')->nullable();
            $table->string('company_fax')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_about')->nullable();
            $table->string('company_facebook')->nullable();
            $table->string('company_twitter')->nullable();
            $table->string('company_instagram')->nullable();
            $table->string('company_youtube')->nullable();
            $table->string('company_field')->nullable();
            $table->string('company_industry')->nullable();
            $table->string('company_speciality')->nullable();
            $table->string('company_countary')->nullable();
            $table->string('company_city')->nullable();
            $table->string('company_district')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
