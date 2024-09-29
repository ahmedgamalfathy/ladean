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
        Schema::create('ourgoals', function (Blueprint $table) {
            $table->id();
            $table->boolean('show_in_home')->default(true);
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('ourgoal_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ourgoal_id');
            $table->string('locale')->index();
            $table->string('name',50);
            $table->text('content');
            $table->unique(['ourgoal_id', 'locale']);
            $table->foreign('ourgoal_id')->references('id')->on('ourgoals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourgoals');
    }
};
