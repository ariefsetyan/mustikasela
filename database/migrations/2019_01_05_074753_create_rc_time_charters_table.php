<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcTimeChartersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_time_charters', function (Blueprint $table) {
            $table->increments('id');
            $table->String('tc_principal');
            $table->double('tc_rate');
            $table->double('tc_volume');
            $table->double('tc_revenue');
            $table->double('tc_expenses');
            $table->String('id_realcost');
            $table->foreign('id_realcost')->references('id_realcost')->on('realcosts');
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
        Schema::dropIfExists('rc_time_charters');
    }
}
