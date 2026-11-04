<?php

namespace Tests\Feature;

use App\Models\ContactSubmission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ComplianceTest extends TestCase
{
    use RefreshDatabase;

    public function test_legal_pages_load_with_llc_identity(): void
    {
        foreach (['/privacy-policy', '/terms-of-service', '/sms-terms'] as $path) {
            $this->get($path)
                ->assertOk()
                ->assertSee('Cloud Dextra LLC')
                ->assertSee('1209 Mountain Road Pl NE')
                ->assertDontSee('Cloud Dextra Solutions');
        }
    }

    public function test_privacy_policy_has_required_sms_statement(): void
    {
        $this->get('/privacy-policy')
            ->assertSee('No mobile opt-in or text message consent will be shared with third parties or affiliates for marketing purposes.');
    }

    public function test_footer_shows_legal_name_address_phone_and_no_listing_disclaimer(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Cloud Dextra LLC')
            ->assertSee('Albuquerque, NM 87110')
            ->assertSee('+1 (505) 528-9454')
            ->assertSee('tel:+15055289454', false)
            ->assertDontSee('tel:+15305988297', false)
            ->assertDontSee('deemed reliable but not guaranteed');
    }

    public function test_consent_checkbox_is_present_and_unchecked(): void
    {
        foreach (['/' => 'sms_consent_audit', '/contact' => 'sms_consent_contact'] as $path => $id) {
            $html = $this->get($path)->assertOk()->getContent();
            $this->assertMatchesRegularExpression('/<input[^>]*id="' . $id . '"[^>]*>/s', $html);
            preg_match('/<input[^>]*id="' . $id . '"[^>]*>/s', $html, $m);
            $this->assertStringNotContainsString(' checked', $m[0]);
            $this->assertStringNotContainsString('required', $m[0]);
        }
    }

    public function test_submission_with_consent_and_phone_records_consent(): void
    {
        Mail::fake();

        $this->from('/contact')->post('/contact-send', [
            'name' => 'Test Agent',
            'email' => 'agent@example.com',
            'service' => 'Virtual Assistance',
            'message' => 'Need help',
            'phone' => '+1 505 555 0100',
            'sms_consent' => '1',
        ])->assertRedirect('/contact');

        $lead = ContactSubmission::first();
        $this->assertTrue($lead->sms_consent);
        $this->assertNotNull($lead->sms_consent_at);
        $this->assertNotNull($lead->sms_consent_ip);
        $this->assertStringContainsString('/contact', $lead->sms_consent_url);
        $this->assertSame(config('company.sms_consent_text'), $lead->sms_consent_text);
    }

    public function test_submission_without_consent_does_not_record_consent(): void
    {
        Mail::fake();

        $this->from('/contact')->post('/contact-send', [
            'name' => 'Test Agent',
            'email' => 'agent@example.com',
            'service' => 'Virtual Assistance',
            'message' => 'Need help',
            'phone' => '+1 505 555 0100',
        ])->assertRedirect('/contact');

        $lead = ContactSubmission::first();
        $this->assertFalse($lead->sms_consent);
        $this->assertNull($lead->sms_consent_at);
        $this->assertNull($lead->sms_consent_text);
    }

    public function test_consent_without_phone_is_not_recorded(): void
    {
        Mail::fake();

        $this->from('/contact')->post('/contact-send', [
            'name' => 'Test Agent',
            'email' => 'agent@example.com',
            'service' => 'Virtual Assistance',
            'message' => 'Need help',
            'sms_consent' => '1',
        ]);

        $this->assertFalse(ContactSubmission::first()->sms_consent);
    }
}
