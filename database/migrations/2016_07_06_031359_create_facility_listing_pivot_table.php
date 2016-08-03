<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityListingPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_listing', function (Blueprint $table) {
            // Relations
            $table->integer('facility_id')->unsigned();
            $table->integer('listing_id')->unsigned();

            // Foreign Keys
            $table->foreign('facility_id')->references('id')->on('facilities');
            $table->foreign('listing_id')->references('id')->on('listings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facility_listing');
    }
}
