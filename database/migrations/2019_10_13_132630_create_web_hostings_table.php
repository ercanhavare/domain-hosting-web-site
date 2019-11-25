<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_hostings', function (Blueprint $table) {
            $table->bigIncrements('id');
            /* $table->string('host_os');
             $table->string('title');
             $table->string('web_space');
             $table->string('web_permission');
             $table->string('traffic');
             $table->string('e_mail');
             $table->string('sub_domain');
             $table->string('domain_redirect');
             $table->string('database');
             $table->string('panel');
             $table->string('support');
             $table->string('ftp');
             $table->string('reseller');*/
            $table->string('title');
            $table->string('price');
            $table->string('host');
            $table->string('email');
            $table->string('web_space');
            $table->string('support');
            $table->string('database');
            $table->string('reseller')->nullable();
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
        Schema::dropIfExists('web_hostings');
    }
}
