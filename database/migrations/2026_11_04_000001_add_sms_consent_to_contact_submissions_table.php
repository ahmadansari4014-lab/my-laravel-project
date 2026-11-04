<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Store a record of SMS opt-in consent with each lead, as required for
     * carrier (TCR) registration and TCPA compliance.
     */
    public function up(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->boolean('sms_consent')->default(false);
            $table->timestamp('sms_consent_at')->nullable();
            $table->string('sms_consent_ip', 45)->nullable();
            $table->string('sms_consent_url', 2048)->nullable();
            $table->text('sms_consent_text')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->dropColumn([
                'sms_consent',
                'sms_consent_at',
                'sms_consent_ip',
                'sms_consent_url',
                'sms_consent_text',
            ]);
        });
    }
};
