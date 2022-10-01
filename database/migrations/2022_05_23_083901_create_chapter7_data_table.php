<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapter7DataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter7_data', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('case_no')->nullable();
            $table->string('category')->nullable();
            $table->string('file')->nullable();
            $table->string('description')->nullable();
            $table->string('user_id')->nullable();
            $table->string('sender_id')->nullable();
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
        Schema::dropIfExists('chapter7_data');
    }
}
