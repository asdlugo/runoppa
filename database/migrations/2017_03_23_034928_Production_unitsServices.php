<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Production_unitsServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('production_units_services',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('production_unit_id')->unsigned()->index();
			$table->foreign('production_unit_id')->references('id')->on('production_units')->onDelete('cascade');
			$table->integer('service_id')->unsigned()->index();
			$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
			/**
			 * Type your addition here
			 *
			 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('production_units_services');
    }
}
