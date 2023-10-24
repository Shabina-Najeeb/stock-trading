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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productname');
            $table->string('productcode')->unique();
            $table->string('homepage');
            $table->string('producticon')->nullable();
            $table->string('minimumrisk');
            $table->string('maximumrisk');
            $table->string('randomrange')->nullable();
            $table->string('timeplay1')->nullable();
            $table->string('timeplay2')->nullable();
            $table->string('timeplay3')->nullable();
            $table->string('timeplay4')->nullable();
            $table->string('profit1')->nullable();
            $table->string('profit2')->nullable();
            $table->string('profit3')->nullable();
            $table->string('profit4')->nullable();
            $table->string('loss1')->nullable();
            $table->string('loss2')->nullable();
            $table->string('loss3')->nullable();
            $table->string('loss4')->nullable();
            $table->string('earningratio')->nullable();
            $table->string('floatingratio')->nullable();
            $table->string('mon')->nullable();
            $table->string('tue')->nullable();
            $table->string('wed')->nullable();
            $table->string('thur')->nullable();
            $table->string('fri')->nullable();
            $table->string('sat')->nullable();
            $table->string('sun')->nullable();
            $table->text('productnote')->nullable();
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
        Schema::dropIfExists('products');
    }
};
