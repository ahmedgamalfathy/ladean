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
        Schema::create('landings', function (Blueprint $table) {
            $table->id();
            $table->string("link1")->nullable();
            $table->string("link2")->nullable();
            $table->string("image")->nullable();
            $table->timestamps();
        });

        Schema::create('landing_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('landing_id');
            $table->string('locale')->index();
            $table->string('name',50);
            $table->text('content');
            $table->unique(['landing_id', 'locale']);
            $table->foreign('landing_id')->references('id')->on('landings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landings');
    }
};
