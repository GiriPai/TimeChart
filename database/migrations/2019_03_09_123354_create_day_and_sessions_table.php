<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayAndSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_and_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day_order');
            $table->string('class_name');
            $table->string('s1');
            $table->string('ss1');
            $table->string('s2');
            $table->string('ss2');
            $table->string('s3');
            $table->string('ss3');
            $table->string('s4');
            $table->string('ss4');
            $table->string('s5');
            $table->string('ss5');

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
        Schema::dropIfExists('day_and_sessions');
    }
}
