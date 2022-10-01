<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePart6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part6s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('petition_id')->nullable();
            $table->string('consumer_debts')->nullable();
            $table->string('business_debts')->nullable();
            $table->string('under_chapter7')->nullable();
            $table->string('admin_expense')->nullable();
            $table->string('credit_own')->nullable();
            $table->string('asset_worth')->nullable();
            $table->string('liabilities')->nullable();
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
        Schema::dropIfExists('part6s');
    }
}
