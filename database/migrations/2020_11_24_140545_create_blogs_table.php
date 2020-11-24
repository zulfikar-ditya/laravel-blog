<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('image');
            $table->string('image_source', '50');
            $table->longText('content');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('user');
            $table->boolean('status')->default(true);

            $table->timestamps();
            $table->foreign('category')->references('id')->on('categories');
            $table->foreign('user')->references('name')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
