<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSonsTable extends Migration
{

    public function up()
    {
        Schema::create('sons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->nullable();
            $table->integer('grand_parents_id')->unsigned();
            $table->foreign('grand_parents_id')->references('id')->on('grand_parents')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sons');
    }
}
