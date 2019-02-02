<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipParentsSonsTable extends Migration
{
    public function up()
    {
        Schema::create('parent_x_son_parent', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('parent_id');
            $table->integer('son_parent_id');
            // $table->integer('parent_id')->unsigned();
            // $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
            // $table->integer('son_parent_id')->unsigned();
            // $table->foreign('son_parent_id')->references('id')->on('son_parents')->onDelete('cascade');
        });

    }

    public function down()
    {
        Schema::dropIfExists('parent_x_son_parent');
    }
}
