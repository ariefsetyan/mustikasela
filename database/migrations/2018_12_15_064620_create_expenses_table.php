<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoice');
            $table->integer('banker');
            $table->integer('agent');
            $table->integer('fresh_water_volume');
            $table->integer('premi_crew');
            $table->integer('time_charter');
            $table->integer('reserved');
            $table->integer('cleaning');
            $table->integer('fee_marketing');
            $table->integer('port_caption');
            $table->integer('kas_kapal');
            $table->integer('insentive');
            $table->String('id_barang');
            $table->foreign('id_barang')->references('id')->on('barangs');
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
        Schema::dropIfExists('expenses');
    }
}
