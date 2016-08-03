<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_user', function (Blueprint $table) {
            // Relations
            $table->integer('listing_id')->unsigned();
            $table->integer('user_id')->unsigned();

            // Foreign Keys
            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listing_user');
    }
}
