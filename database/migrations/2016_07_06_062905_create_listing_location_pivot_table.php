<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingLocationPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_location', function (Blueprint $table) {
            // Relations
            $table->integer('listing_id')->unsigned();
            $table->integer('location_id')->unsigned();

            // Foreign Keys
            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listing_location');
    }
}
