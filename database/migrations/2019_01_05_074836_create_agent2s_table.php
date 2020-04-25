<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgent2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent2s', function (Blueprint $table) {
            $table->increments('id');
            $table->String('a2_principal');
            $table->double('a2_rate');
            $table->double('a2_volume');
            $table->double('a2_revenue');
            $table->double('a2_expenses');
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
        Schema::dropIfExists('agent2s');
    }
}
