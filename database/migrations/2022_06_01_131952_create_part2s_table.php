<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePart2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part2s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('petition_id')->nullable();
            $table->string('bankruptcy')->nullable();
            $table->string('fee_type')->nullable();
            $table->string('bankruptcy_8year')->nullable();
            $table->string('distric81')->nullable();
            $table->string('date81')->nullable();
            $table->string('case81')->nullable();
            $table->string('distric82')->nullable();
            $table->string('date82')->nullable();
            $table->string('case82')->nullable();
            $table->string('distric83')->nullable();
            $table->string('date83')->nullable();
            $table->string('case83')->nullable();
            $table->string('case_pending')->nullable();
            $table->string('case_debtor1')->nullable();
            $table->string('case_relation1')->nullable();
            $table->string('case_distric1')->nullable();
            $table->string('case_date1')->nullable();
            $table->string('case_no1')->nullable();
            $table->string('case_debtor2')->nullable();
            $table->string('case_relation2')->nullable();
            $table->string('case_distric2')->nullable();
            $table->string('case_date2')->nullable();
            $table->string('case_no2')->nullable();
            $table->string('residence_rent')->nullable();
            $table->string('initial_statement')->nullable();
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
        Schema::dropIfExists('part2s');
    }
}
