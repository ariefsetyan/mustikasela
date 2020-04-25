<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugAssistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tug_assists', function (Blueprint $table) {
            $table->increments('id');
            $table->String('ta_principal');
            $table->double('ta_rate');
            $table->double('ta_volume');
            $table->double('ta_revenue');
            $table->double('ta_expenses');
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
        Schema::dropIfExists('tug_assists');
    }
}
