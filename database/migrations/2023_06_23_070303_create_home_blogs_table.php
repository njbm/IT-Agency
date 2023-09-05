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
        Schema::create('home_blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_cat_id');
            $table->unsignedBigInteger('blog_sub_cat_id');
            $table->unsignedBigInteger('blog_child_cat_id');
            $table->string('blog_title', 200);
            $table->string('blog_image', 255)->nullable();
            $table->longText('blog_desc');
            $table->string('blog_writer', 150);
            $table->boolean('blog_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_blogs');
    }
};
