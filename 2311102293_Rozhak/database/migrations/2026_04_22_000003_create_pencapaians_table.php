<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pencapaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_diri_id')->constrained('data_diris')->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->date('date');
            $table->string('category')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pencapaians');
    }
};
