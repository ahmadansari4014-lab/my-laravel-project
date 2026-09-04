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
        Schema::create('calculator_results', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->decimal('principal', 12, 2)->nullable();
            $table->decimal('rate', 8, 2)->nullable();
            $table->integer('months')->nullable();
            $table->decimal('result', 12, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculator_results');
    }
};
