<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediatorFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediator_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->String('m_principal');
            $table->double('m_rate');
            $table->double('m_volume');
            $table->double('m_revenue');
            $table->double('m_expenses');
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
        Schema::dropIfExists('mediator_fees');
    }
}
