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
        Schema::create('course_students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('email', 255);
            $table->string('student_image');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('country');
            $table->string('date_of_birth');
            $table->string('city');
            $table->string('post_code');
            $table->string('nid_number');
            $table->string('qualification');
            $table->string('address');
            $table->string('course_name');
            $table->string('course_quatity');
            $table->string('course_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_students');
    }
};
