<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detils', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loading_time');
            $table->integer('discharging');
            $table->String('port_of_loading');
            $table->String('port_of_descharging');
            $table->integer('sailing_time');
            $table->integer('assist');
            $table->integer('add_cost');
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
        Schema::dropIfExists('detils');
    }
}
