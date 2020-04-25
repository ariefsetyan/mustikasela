<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financials', function (Blueprint $table) {
            $table->String('id_financial');
            $table->String('project');
            $table->String('customer_name');
            $table->Date('date');
            $table->primary('id_financial');
            $table->unsignedInteger('id_kondisi');
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
        Schema::dropIfExists('financials');
    }
}
