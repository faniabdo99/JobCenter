<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration{
    public function up(){
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('category_id');
            $table->integer('company_id');
            $table->string('type');
            $table->integer('salary')->nullable();
            $table->integer('experience')->nullable();
            $table->integer('age')->nullable();
            $table->text('description');
            $table->text('responses')->nullable();
            $table->text('criteria')->nullable();
            $table->string('position');
            $table->integer('city_id');
            $table->string('address')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
