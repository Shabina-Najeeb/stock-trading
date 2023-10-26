<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riskcontrols', function (Blueprint $table) {
            $table->id();
            $table->string('guaranteed_time')->nullable();
            $table->string('steady_time')->nullable();
            $table->string('win_ratio')->nullable();
            $table->string('loss_ratio')->nullable();
            $table->string('designated_client_losses')->nullable();
            $table->string('customer_profit')->nullable();
            $table->string('risk_control')->nullable();
            $table->string('risk_probability')->nullable();
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
        Schema::dropIfExists('riskcontrols');
    }
};
