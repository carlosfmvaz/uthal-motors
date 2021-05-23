<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_cat');
            $table->string('v_brand');
            $table->string('v_model');
            $table->double('v_price');
            $table->string('v_color');
            $table->longText('v_description');
            $table->longText('image');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('latitude');
            $table->string('longitude');
            $table->foreignId('id_owner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announces');
    }
}
