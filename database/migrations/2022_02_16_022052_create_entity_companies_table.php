<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity__companies', function (Blueprint $table) {
            $table->id('company_id');
            $table->string('company_name');
            $table->string('company_tagline');
            $table->string('company_desc');
            $table->mediumText('company_address');
            $table->string('company_website');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_facebook');
            $table->string('company_tumblr');
            $table->string('company_twitter');
            $table->string('company_instagram');
            $table->string('company_google');
            $table->string('company_youtube');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entity__companies');
    }
}
