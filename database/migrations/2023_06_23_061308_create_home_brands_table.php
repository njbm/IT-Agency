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
        Schema::create('home_brands', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name', 255)->nullable();
            $table->string('brand_logo', 255)->nullable();
            $table->boolean('brand_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_brands');
    }
};
