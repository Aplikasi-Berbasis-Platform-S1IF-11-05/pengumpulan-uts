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
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('nim')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('universitas')->nullable();
            $table->string('ipk')->nullable();
            $table->string('email')->nullable();
            $table->string('cv_link')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('telegram')->nullable();
            $table->string('web')->nullable();
            $table->string('whatsapp')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('nim')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('universitas')->nullable();
            $table->string('ipk')->nullable();
            $table->string('email')->nullable();
            $table->string('cv_link')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('telegram')->nullable();
            $table->string('web')->nullable();
            $table->string('whatsapp')->nullable();
            //
        });
    }
};
