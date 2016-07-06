<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');

            // Relation
            $table->integer('organization_id')->unsigned()->index()->nullable();
            $table->foreign('organization_id')->references('id')->on('departments');

            // Listing
            $table->string('identifier')->unique();
            $table->string('announcement');
            $table->string('name');
            $table->string('url');
            $table->text('summary');
            $table->text('qualifications');
            $table->integer('low_grade');
            $table->integer('high_grade');
            $table->integer('min_pay');
            $table->integer('max_pay');
            $table->string('pay_interval');

            // Timestamps
            $table->timestamp('published_at');
            $table->timestamp('ends_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listings');
    }
}
