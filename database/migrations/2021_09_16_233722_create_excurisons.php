<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcurisons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excurisons', function (Blueprint $table) {
            $table->id('ex_id');
            $table->date('date_booked');
            $table->date('exc_date');
            $table->integer('adults_num');
            $table->integer('child_num');
            $table->decimal('child_cost',$precision = 8, $scale = 2);
            $table->decimal('adult_cost',$precision = 8, $scale = 2);
            $table->decimal('total_cost',$precision = 8, $scale = 2);
            $table->BigInteger('booking_id');
            $table->BigInteger('programme_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excurisons');
    }
}
