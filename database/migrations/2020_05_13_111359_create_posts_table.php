<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('thumbnail')->nullable();
            $table->string('en_title')->unique();
            $table->string('ar_title')->unique();
            $table->string('slug')->unique();
            $table->string('en_sub_title')->nullable();
            $table->string('ar_sub_title')->nullable();
            $table->text('en_details');
            $table->text('ar_details');
            $table->string('post_type')->nullable();
            $table->enum('is_published', ['1', '0']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
