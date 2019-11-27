<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebPacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_packets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('packet_name_id');
            $table->string('price');
            $table->text('desc');
            $table->timestamps();

            $table->foreign('packet_name_id')->references('id')->on('packet_names');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_packets');
    }
}
