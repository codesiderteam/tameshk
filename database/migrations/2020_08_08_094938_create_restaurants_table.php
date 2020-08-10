<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('brand_name');
            $table->string('brand_name_en')->nullable();;
            $table->string("email")->nullable();
            $table->string('mobile');

            $table->unsignedBigInteger('type_id');
            $table->unsignedInteger('type_item_id');

            $table->text('location');
            $table->string('link');
            $table->text('description')->nullable();;
            $table->longText('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
