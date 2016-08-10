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
            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('organization_id')->unsigned()->index()->nullable();
            $table->foreign('organization_id')->references('id')->on('organizations');

            // Listing
            $table->string('c_number')->unique();
            $table->string('a_number');
            $table->string('name');
            $table->string('url');
            $table->text('summary');
            $table->text('qualifications');
            $table->text('open_to');
            $table->integer('open_to_code');
            $table->string('schedule');
            $table->integer('schedule_code');
            $table->string('position');
            $table->integer('position_code');
            $table->string('job_grade');
            $table->integer('low_grade');
            $table->integer('high_grade');
            $table->string('pay_type');
            $table->integer('min_pay');
            $table->integer('max_pay');

            // System
            $table->boolean('linked')->default(0);

            // Timestamps
            $table->date('published_at');
            $table->date('ends_at');
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
