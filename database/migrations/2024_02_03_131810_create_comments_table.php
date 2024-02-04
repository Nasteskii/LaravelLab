<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('on_post')->unsigned()->default(0);
            $table->integer('from_user')->unsigned()->default(0);
            $table->foreign('on_post')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('from_user')->references('id')->on('users')->onDelete('cascade');
            $table->text('body');
            $table->timestamp('at_time')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
