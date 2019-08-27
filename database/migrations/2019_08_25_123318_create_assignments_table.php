<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('assignment_id');
            $table->integer('assign_anchor_id')->unsigned();
            $table->integer('assign_program_id')->unsigned();

            $table->foreign('assign_anchor_id')
                    ->references('anchor_id')
                    ->on('anchors');

            $table->foreign('assign_program_id')
                    ->references('program_id')
                    ->on('programs');        


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
        Schema::dropIfExists('assignments');
    }
}
