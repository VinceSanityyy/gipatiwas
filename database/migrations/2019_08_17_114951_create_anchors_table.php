<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnchorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anchors', function (Blueprint $table) {
            $table->increments('anchor_id');
            $table->string('anchor_fname', '30');
            $table->string('anchor_lname', '30');
            $table->string('anchor_email', '50')->unique();
            $table->string('anchor_cnumber', '11');
            $table->date('anchor_bdate', '6');
            $table->string('anchor_sex');
            $table->string('anchor_status');

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
        Schema::dropIfExists('anchors');
    }
}
