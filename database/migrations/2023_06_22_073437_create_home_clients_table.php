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
        Schema::create('home_clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_name', 255)->nullable();
            $table->string('client_logo', 255)->nullable();
            $table->boolean('client_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_clients');
    }
};
