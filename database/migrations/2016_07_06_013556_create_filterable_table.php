<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilterableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filterables', function (Blueprint $table) {
            $table->increments('id');

            // Filter
            $table->integer('filter_id')->unsigned()->index();
            $table->foreign('filter_id')->references('id')->on('filters');

            // Polymorph
            $table->string('filterable_type');
            $table->integer('filterable_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('filterables');
    }
}
