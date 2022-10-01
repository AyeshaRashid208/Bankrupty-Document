<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePart4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part4s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('petition_id')->nullable();
            $table->string('hazard')->nullable();
            $table->string('hazard_detail')->nullable();
            $table->string('immediate_attention')->nullable();
            $table->string('property_address')->nullable();
            $table->string('property_city')->nullable();
            $table->string('property_state')->nullable();
            $table->string('property_zipcode')->nullable();
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
        Schema::dropIfExists('part4s');
    }
}
