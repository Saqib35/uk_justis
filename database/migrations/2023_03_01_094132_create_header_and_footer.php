<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderAndFooter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_and_footer', function (Blueprint $table) {
            $table->id();
            $table->string('time_office',100)->nullable();
            $table->string('email_office',200)->nullable();
            $table->string('address_office')->nullable();
            $table->string('logo',300)->nullable();
            $table->string('description_footer',500)->nullable();
            $table->string('facebook_link',100)->nullable();
            $table->string('twitter_link',100)->nullable();
            $table->string('whatapp_link',100)->nullable();
            $table->string('linkdin_link',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('header_and_footer');
    }
}
