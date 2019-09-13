<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('sched_id');
            $table->integer('sched_guest_id')->unsigned();
            $table->integer('sched_appointment_id')->unsigned();
            $table->timestamps();
        });



        Schema::table('schedules', function($table)
        {
            $table->foreign('sched_guest_id')
                    ->references('guest_id')
                    ->on('guests');
                    
            $table->foreign('sched_appointment_id')
                  ->references('appointment_id')
                  ->on('appointments');
        });

           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
