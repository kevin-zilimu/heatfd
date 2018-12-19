<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->mediumText('Description');
            $table->integer('Quantity');
            $table->double('Price');
            $table->string('Image1');
            $table->string('Image2')->nullable();
            $table->string('Image3')->nullable();
            $table->string('Image4')->nullable();
            $table->unsignedInteger('User_Id')->index();
            $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('foodposts');
    }
}
