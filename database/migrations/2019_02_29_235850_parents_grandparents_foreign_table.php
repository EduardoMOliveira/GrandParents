<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParentsGrandparentsForeignTable extends Migration
{
    
    public function up()
    {
        Schema::table('parents', function (Blueprint $table){
            $table->integer('grandparent_id')->nullable()->unsigned();
            $table->foreign('grandparent_id')->references('id')->on('grandparents')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::table('parents', function (Blueprint $table){
            $table->dropForeign(['grandparent_id']);
            $table->dropColumn('grandparent_id');
        });
    }
}
