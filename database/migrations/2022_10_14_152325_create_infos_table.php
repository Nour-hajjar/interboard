<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
       $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('en_name')->unique();
            $table->string('ar_name')->unique();
            $table->string('name')->nullable();
            $table->string('name_a')->nullable();
            $table->string('en_course');
            $table->string('ar_course');
            $table->string('code');
            $table->string('date');
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
        Schema::dropIfExists('infos');
    }
}
