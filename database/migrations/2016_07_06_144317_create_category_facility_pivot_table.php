<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryFacilityPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_facility', function (Blueprint $table) {
            // Relations
            $table->integer('category_id')->unsigned();
            $table->integer('facility_id')->unsigned();

            // Foreign Keys
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('facility_id')->references('id')->on('facilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_facility');
    }
}
