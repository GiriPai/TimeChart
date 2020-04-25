<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('day_order');
            $table->string('class');
            $table->string('session_1');
            $table->string('staff_1');
            $table->string('session_2');
            $table->string('staff_2');
            $table->string('session_3');
            $table->string('staff_3');
            $table->string('session_4');
            $table->string('staff_4');
            $table->string('session_5');
            $table->string('staff_5');

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
        Schema::dropIfExists('session_logs');
    }
}
