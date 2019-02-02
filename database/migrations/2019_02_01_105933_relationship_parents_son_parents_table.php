<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipParentsSonParentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('parents_x_son_parents', function (Blueprint $table) {
            $table->integer('parent_id');
            $table->integer('son_parent_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('parents_x_son_parents');
    }
}
