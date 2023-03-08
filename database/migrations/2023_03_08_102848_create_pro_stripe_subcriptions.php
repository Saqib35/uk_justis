<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProStripeSubcriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_stripe_subcriptions', function (Blueprint $table) {
            $table->id();
            $table->string('pro_id');
            $table->string('plan_id');
            $table->string('subscription_id',200)->nullable();
            $table->string('payment_intent_id',200)->nullable();
            $table->string('customer_id',200)->nullable();
            $table->string('start_date',100)->nullable();
            $table->string('expired_date',100)->nullable();
            $table->string('plan_interval',100)->nullable();
            $table->string('plan_amount',100)->nullable();
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
        Schema::dropIfExists('pro_stripe_subcriptions');
    }
}
