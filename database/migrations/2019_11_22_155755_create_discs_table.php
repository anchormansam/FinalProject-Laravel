<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscsTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('plastic_id');
            $table->text('name');
            $table->tinyInteger('speed');
            $table->tinyInteger('glide');
            $table->tinyInteger('turn');
            $table->tinyInteger('fade');
            $table->timestamps();

            $table->foreign('plastic_id')->references('id')->on('plastics');
            $table->foreign('brand_id')->references('id')->on('brands');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discs');
    }
}
