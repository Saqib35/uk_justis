<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchivements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achivements', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->string('detail',200)->nullable();
            $table->string('complete_case',200)->nullable();
            $table->string('expart_attorney',200)->nullable();
            $table->string('happy_clients',200)->nullable();
            $table->string('win_awards',200)->nullable();
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
        Schema::dropIfExists('achivements');
    }
}
