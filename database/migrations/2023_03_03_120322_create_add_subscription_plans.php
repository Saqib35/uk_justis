<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddSubscriptionPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name',200)->nullable();
            $table->string('type',100)->nullable();
            $table->string('price',100)->nullable();
            $table->string('stripe_price_id',100)->nullable();
            $table->string('stripe_product_id',100)->nullable();
            $table->string('duration',100)->nullable();
            $table->text('include_one')->nullable();
            $table->text('include_two')->nullable();
            $table->text('include_three')->nullable();
            $table->text('include_four')->nullable();
            $table->text('include_five')->nullable();
            $table->text('include_six')->nullable();
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
        Schema::dropIfExists('add_subscription_plans');
    }
}
