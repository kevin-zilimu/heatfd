<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('User_Id')->index();
            $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('Food_Id')->index();
            $table->foreign('Food_Id')->references('id')->on('foodposts')->onDelete('cascade');
            $table->unsignedInteger('Orderstatus_Id')->index();
            $table->foreign('Orderstatus_Id')->references('id')->on('orderstatus')->onDelete('cascade');
            $table->double('Total');
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
        Schema::dropIfExists('orders');
    }
}
