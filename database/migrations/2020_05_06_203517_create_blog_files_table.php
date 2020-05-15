<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogFilesTable extends Migration{
    public function up(){
        Schema::create('blog_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('post_id');
            $table->string('source');
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
        Schema::dropIfExists('blog_files');
    }
}
