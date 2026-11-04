<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'service',
        'message',
        'industry',
        'bottleneck',
        'team_size',
        'phone',
        'sms_consent',
        'sms_consent_at',
        'sms_consent_ip',
        'sms_consent_url',
        'sms_consent_text',
    ];

    protected function casts(): array
    {
        return [
            'sms_consent' => 'boolean',
            'sms_consent_at' => 'datetime',
        ];
    }
}
