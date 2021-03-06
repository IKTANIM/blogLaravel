<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // $table->increments('id');
            $table->increments('Post_id');
            $table->string('emailPost');
            $table->string('postTitle');
            $table->longText('description');
            $table->string('imgExt')->nullable($value = true);//allow null value
            $table->foreign('emailPost')->references('email')->on('users');//Foreign key
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
        Schema::dropIfExists('posts');
    }
}
