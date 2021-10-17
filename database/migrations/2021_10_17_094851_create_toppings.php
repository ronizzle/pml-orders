<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToppings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toppings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('pizza_id');
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->integer('area');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toppings');
    }
}
