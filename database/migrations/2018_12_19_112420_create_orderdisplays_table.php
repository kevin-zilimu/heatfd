<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdisplays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_Id')->unsigned()->index();;
            $table->timestamps();
            $table->foreign('food_Id')->references('id')->on('foodposts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdisplays');
    }
}
