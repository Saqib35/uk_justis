<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_groups', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id')->nullable();
            $table->integer('sender_id')->nullable();
            $table->integer('receiver_id')->nullable();
            $table->text('last_message')->nullable();
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
        Schema::dropIfExists('message_groups');
    }
}
