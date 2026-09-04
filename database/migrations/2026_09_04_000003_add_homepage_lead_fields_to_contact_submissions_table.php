<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->string('industry')->nullable()->after('message');
            $table->string('bottleneck')->nullable()->after('industry');
            $table->string('team_size')->nullable()->after('bottleneck');
            $table->string('phone', 50)->nullable()->after('team_size');
            $table->decimal('weekly_hours', 8, 2)->nullable()->after('phone');
            $table->decimal('hourly_rate', 10, 2)->nullable()->after('weekly_hours');
            $table->decimal('monthly_savings', 12, 2)->nullable()->after('hourly_rate');
            $table->decimal('yearly_savings', 12, 2)->nullable()->after('monthly_savings');
        });
    }

    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->dropColumn([
                'industry',
                'bottleneck',
                'team_size',
                'phone',
                'weekly_hours',
                'hourly_rate',
                'monthly_savings',
                'yearly_savings',
            ]);
        });
    }
};
