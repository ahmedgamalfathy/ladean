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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
//            $table->boolean('show_our_goals')->default(true);
//            $table->boolean('show_products')->default(true);
//            $table->boolean('show_testimonials')->default(true);
//            $table->boolean('show_partners')->default(true);
//            $table->boolean('show_faq')->default(true);
            $table->string('key');
            $table->boolean('show_in_home')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
