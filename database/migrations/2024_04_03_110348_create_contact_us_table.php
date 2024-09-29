<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ContactUs;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->longText('message');
            $table->string('name',191);
            $table->string('phone',20);
            $table->string('email',50);
            $table->string("subject");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
