<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hsms', function (Blueprint $table) {
            $table->id('b_cnic');
            $table->string('b_name');
            $table->integer('b_contact');
            $table->integer('b_bookdays');
            $table->date('b_arrivaldate');
            $table->date('b_departuredate');
            $table->string('b_email');
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
        Schema::dropIfExists('hsms');
    }
};
