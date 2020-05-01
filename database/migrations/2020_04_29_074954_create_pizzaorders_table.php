<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzaorders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customername');
            $table->string('customerlocation');
            $table->string('customerphone');
            $table->string('pizzatype');
            $table->string('pizzasize');
            $table->string('quantity');
            $table->string('price');
            $table->string('deliveryfee');
            $table->string('totalprice');
            $table->string('additionaldetails');
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
        Schema::dropIfExists('pizzaorders');
    }
}
