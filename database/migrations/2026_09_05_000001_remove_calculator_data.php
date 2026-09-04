<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('calculator_results');

        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->dropColumn([
                'weekly_hours',
                'hourly_rate',
                'monthly_savings',
                'yearly_savings',
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->decimal('weekly_hours', 8, 2)->nullable();
            $table->decimal('hourly_rate', 10, 2)->nullable();
            $table->decimal('monthly_savings', 12, 2)->nullable();
            $table->decimal('yearly_savings', 12, 2)->nullable();
        });
    }
};
