<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityOrganizationPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_organization', function (Blueprint $table) {
            // Relations
            $table->integer('facility_id')->unsigned();
            $table->integer('organization_id')->unsigned();

            // Foreign Keys
            $table->foreign('facility_id')->references('id')->on('facilities');
            $table->foreign('organization_id')->references('id')->on('organizations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facility_organization');
    }
}
