<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSonParentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('son_parents', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name')->unique()->nullable();
            $table->integer('age')->nullable();
            $table->timestamps();
        });
    }
   
    public function down()
    {
        Schema::dropIfExists('son_parents');
    }
}
