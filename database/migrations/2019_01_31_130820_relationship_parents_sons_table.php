<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipParentsSonsTable extends Migration
{

    public function up()
    {
        Schema::create('parent_x_son', function (Blueprint $table) {
            $table->integer('parent_id');
            $table->integer('son_id');
            // $table->integer('parent_id')->unsigned();
            // $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
            // $table->integer('son_id')->unsigned();
            // $table->foreign('son_id')->references('id')->on('sons')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('parent_x_son');
    }
}
