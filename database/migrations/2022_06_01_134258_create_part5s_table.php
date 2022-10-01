<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePart5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part5s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('petition_id')->nullable();
            $table->string('credit_couseling1')->nullable();
            $table->string('credit_couseling_reason1')->nullable();
            $table->string('credit_couseling2')->nullable();
            $table->string('credit_couseling_reason2')->nullable();
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
        Schema::dropIfExists('part5s');
    }
}
