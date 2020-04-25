<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spals', function (Blueprint $table) {
            $table->increments('id');
            $table->String('id_financial');
            $table->String('pemilik_kapal');
            $table->String('keagenan_kapal');
            $table->String('bendera_kapal');
            $table->String('posisi_kapal');
            $table->String('kodisi_muatan');
            $table->integer('uang_sewa');
            $table->String('kesediaan_kapal');
            $table->String('pembayaran');
            $table->String('tujuan_transfer');
            $table->String('pengiriman_barang');
            $table->String('penerima_barang');
            $table->String('asuransi');
            $table->String('asuransi_barang');
            $table->integer('denda_terlambat');
            $table->String('syarat_tambahan');
            $table->String('perselisihan');
            $table->String('catatan');
            $table->foreign('id_financial')->references('id_financial')->on('financials');
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
        Schema::dropIfExists('spals');
    }
}
