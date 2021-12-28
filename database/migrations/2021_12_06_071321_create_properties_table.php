<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_bn');
            $table->string('name_tr');
            $table->string('featured_image');
            $table->unsignedBigInteger('location_id');

            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('sale')->default(1)->comment('0=rent, 1=sale');
            $table->unsignedBigInteger('type')->default(1)->comment('0=land,1=apertment,2=villa') ;

            $table->string('bedrooms')->nullable();
            $table->unsignedBigInteger('bathrooms')->nullable();
            $table->unsignedBigInteger('net_sql')->nullable();
            $table->unsignedBigInteger('gross_sql')->nullable();
            $table->unsignedBigInteger('poll')->nullable()->comment('0=no,1=privet,2=public,3=both');

            $table->string('overview');
            $table->string('overview_bn');
            $table->string('overview_tr');

            $table->longText('whyBuy')->nullable();
            $table->longText('description');
            $table->longText('description_bn');
            $table->longText('description_tr');

            


            $table->timestamps();

            // $table->foreign('feature_media_id')->references('id')->on('media');

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
        Schema::dropIfExists('properties');
    }
}
