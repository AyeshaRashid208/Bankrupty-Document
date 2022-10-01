<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePart7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part7s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('petition_id')->nullable();
            $table->string('signature_debtor1')->nullable();
            $table->string('executed_date1')->nullable();
            $table->string('signature_debtor2')->nullable();
            $table->string('executed_date2')->nullable();
            $table->string('attorney_signature')->nullable();
            $table->string('attorney_date')->nullable();
            $table->string('printed_name')->nullable();
            $table->string('firm_name')->nullable();
            $table->string('firm_address')->nullable();
            $table->string('firm_city')->nullable();
            $table->string('firm_state')->nullable();
            $table->string('firm_zipcode')->nullable();
            $table->string('firm_phone')->nullable();
            $table->string('firm_email')->nullable();
            $table->string('bar_number')->nullable();
            $table->string('bar_state')->nullable();
            $table->string('long_term')->nullable();
            $table->string('aware_fraud')->nullable();
            $table->string('someone_pay')->nullable();
            $table->string('person_name')->nullable();
            $table->string('signature1')->nullable();
            $table->string('signature1_date')->nullable();
            $table->string('signature1_phone')->nullable();
            $table->string('signature1_cell')->nullable();
            $table->string('signature1_email')->nullable();
            
            $table->string('signature2')->nullable();
            $table->string('signature2_date')->nullable();
            $table->string('signature2_phone')->nullable();
            $table->string('signature2_cell')->nullable();
            $table->string('signature2_email')->nullable();
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
        Schema::dropIfExists('part7s');
    }
}
