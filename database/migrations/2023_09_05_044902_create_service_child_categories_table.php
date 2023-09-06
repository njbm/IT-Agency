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
        Schema::create('service_child_categories', function (Blueprint $table) {
            $table->unsignedInteger('sub_cat_id');
            $table->string('child_cat_name', 255);
            $table->string('child_cat_title', 255);
            $table->string('child_cat_image', 255);
            $table->boolean('child_cat_status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_child_categories');
    }
};
