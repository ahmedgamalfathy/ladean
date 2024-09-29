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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->boolean('show_in_home')->default(true);
            $table->string('image')->nullable();
            $table->tinyInteger("rate")->default(5);
            $table->timestamps();
        });
        Schema::create('testimonial_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('testimonial_id');
            $table->string('locale')->index();
            $table->string('name',50);
            $table->text('content');
            $table->unique(['testimonial_id', 'locale']);
            $table->foreign('testimonial_id')->references('id')->on('testimonials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
