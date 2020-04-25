<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortCaptainFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('port_captain_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->String('pc_principal');
            $table->double('pc_rate');
            $table->double('pc_volume');
            $table->double('pc_revenue');
            $table->double('pc_expenses');
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
        Schema::dropIfExists('port_captain_fees');
    }
}
