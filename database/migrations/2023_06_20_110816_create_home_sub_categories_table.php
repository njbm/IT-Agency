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
        Schema::create('home_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cat_id');
            $table->string('sub_cat_name', 255);
            $table->boolean('sub_cat_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sub_categories');
    }
};
