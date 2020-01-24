<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    public function up(){
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_type');
            $table->integer('item_id');
            $table->integer('user_id');
            $table->integer('item_owner_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('likes');
    }
}
