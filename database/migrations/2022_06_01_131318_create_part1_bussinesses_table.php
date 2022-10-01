<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePart1BussinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part1_bussinesses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('petition_id')->nullable();
            $table->string('business1')->nullable();
            $table->string('business_name1')->nullable();
            $table->string('ein1')->nullable();
            $table->string('business2')->nullable();
            $table->string('business_name2')->nullable();
            $table->string('ein2')->nullable();
            $table->string('business3')->nullable();
            $table->string('business_name3')->nullable();
            $table->string('ein3')->nullable();
            $table->string('business4')->nullable();
            $table->string('business_name4')->nullable();
            $table->string('ein4')->nullable();
            $table->string('address1')->nullable();
            $table->string('city1')->nullable();
            $table->string('state1')->nullable();
            $table->string('zipcode1')->nullable();
            $table->string('country1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city2')->nullable();
            $table->string('state2')->nullable();
            $table->string('zipcode2')->nullable();
            $table->string('country2')->nullable();
            
            $table->string('mail_address1')->nullable();
            $table->string('mail_po_box1')->nullable();
            $table->string('mail_city1')->nullable();
            $table->string('mail_state1')->nullable();
            $table->string('mail_zipcode1')->nullable();
            $table->string('mail_address2')->nullable();
            $table->string('mail_po_box2')->nullable();
            $table->string('mail_city2')->nullable();
            $table->string('mail_state2')->nullable();
            $table->string('mail_zipcode2')->nullable();
            
            $table->string('distric_type1')->nullable();
            $table->string('distric_reason1')->nullable();
            $table->string('distric_type2')->nullable();
            $table->string('distric_reason2')->nullable();
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
        Schema::dropIfExists('part1_bussinesses');
    }
}
