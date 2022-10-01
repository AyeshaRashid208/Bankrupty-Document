<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePart1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part1s', function (Blueprint $table) {
            $table->id();
            $table->string('first_name1')->nullable();
            $table->string('middle_name1')->nullable();
            $table->string('last_name1')->nullable();
            $table->string('sr_name1')->nullable();
            $table->string('first_name2')->nullable();
            $table->string('middle_name2')->nullable();
            $table->string('last_name2')->nullable();
            $table->string('sr_name2')->nullable();
            $table->string('first_name_8year1')->nullable();
            $table->string('middle_name_8year1')->nullable();
            $table->string('last_name_8year1')->nullable();
            $table->string('first_name_8year2')->nullable();
            $table->string('middle_name_8year2')->nullable();
            $table->string('last_name_8year2')->nullable();
            $table->string('first_name_8year3')->nullable();
            $table->string('middle_name_8year3')->nullable();
            $table->string('last_name_8year3')->nullable();
            $table->string('first_name_8year4')->nullable();
            $table->string('middle_name_8year4')->nullable();
            $table->string('last_name_8year4')->nullable();
            $table->string('ssn1')->nullable();
            $table->string('itin1')->nullable();
            $table->string('ssn2')->nullable();
            $table->string('itin2')->nullable();
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
        Schema::dropIfExists('part1s');
    }
}
