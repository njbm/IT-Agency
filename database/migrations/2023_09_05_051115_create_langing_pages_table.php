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
        Schema::create('langing_pages', function (Blueprint $table) {
            $table->id();
            $table->text('slider_top_title')->nullable();
            $table->text('slider_sort_title')->nullable();
            $table->text('slider_description')->nullable();

            $table->text('s1_title1')->nullable();
            $table->text('s1_text1')->nullable();

            $table->text('s2_title1')->nullable();
            $table->text('s2_text1')->nullable();
            $table->string('s2_back_img')->nullable();

            $table->text('s3_title1')->nullable();
            $table->text('s3_text1')->nullable();
            $table->text('s3_text2')->nullable();
            $table->text('s3_description1')->nullable();

            $table->text('s4_title1')->nullable();
            $table->text('s4_text1')->nullable();
            $table->string('s4_back_img1')->nullable();

            $table->text('s5_title1')->nullable();
            $table->text('s5_title2')->nullable();
            $table->text('s5_title_r')->nullable();

            $table->text('s6_title1')->nullable();
            $table->text('s6_text1')->nullable();
            $table->string('s6_back_img1')->nullable();

            $table->text('s7_title1')->nullable();
            $table->text('s7_text1')->nullable();


            $table->text('s8_title1')->nullable();
            $table->text('s8_text1')->nullable();

            $table->text('s9_title1')->nullable();
            $table->string('s9_back_img1')->nullable();

            $table->text('s10_title1')->nullable();
            $table->text('s10_text1')->nullable();
            $table->text('s10_r_title1')->nullable();
            $table->string('s10_r_sceen')->nullable();
            $table->text('s10_r_text1')->nullable();
            $table->text('s10_r_text2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langing_pages');
    }
};
