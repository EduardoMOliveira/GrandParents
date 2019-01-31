<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{

    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->nullable();
            $table->integer('grand_parent_id')->unsigned();
            $table->foreign('grand_parent_id')->references('id')->on('grand_parents')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('parents', function (Blueprint $table) {

            $table->dropForeign(['grand_parent_id']);

        });

        Schema::dropIfExists('parents');
    }
}
