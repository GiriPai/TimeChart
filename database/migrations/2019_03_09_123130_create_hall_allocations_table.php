<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hall_allocations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hall_name');
            $table->date('date');
            $table->time('from');
            $table->time('to');
            $table->string('event');
            $table->string('staff_id');
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
        Schema::dropIfExists('hall_allocations');
    }
}
