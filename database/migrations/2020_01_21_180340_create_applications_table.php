<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration{
    public function up(){
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('job_id');
            $table->text('message');
            $table->string('resume')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('applications');
    }
}
