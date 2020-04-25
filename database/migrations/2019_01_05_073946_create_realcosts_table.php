<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealcostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realcosts', function (Blueprint $table) {
            $table->String('id_realcost');
            $table->String('nama_kapal');
            $table->String('nama_costomer');
            $table->date('date');
            $table->String('pelabuhan_asal');
            $table->String('pelabuhan_tujuan');
            $table->String('estimasi');
            $table->String('pemilik');
            $table->primary('id_realcost');
            $table->increments('id_kondisi');
            $table->foreign('id_kondisi')->references('id')->on('kondisis');
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
        Schema::dropIfExists('realcosts');
    }
}
