<?php

namespace Tests\Feature;

use Tests\TestCase;

class RealEstatePageTest extends TestCase
{
    public function test_real_estate_page_lists_services_and_is_linked_in_nav(): void
    {
        $response = $this->get('/services')->assertOk()
            ->assertSee('Real Estate Virtual Assistants')
            ->assertSee('tel:+15055289454', false)
            ->assertSee('"@type":"FAQPage"', false);

        foreach (config('real-estate-services') as $slug => $service) {
            $response->assertSee($service['title'])
                ->assertSee('/services/' . $slug, false);
        }

        $this->get('/')->assertSee('/services', false);
    }

    public function test_every_service_has_a_detail_page(): void
    {
        foreach (config('real-estate-services') as $slug => $service) {
            $this->get('/services/' . $slug)
                ->assertOk()
                ->assertSee($service['title'])
                ->assertSee($service['includes'][0]);
        }
    }

    public function test_unknown_service_returns_404(): void
    {
        $this->get('/services/not-a-service')->assertNotFound();
    }

    public function test_old_real_estate_urls_redirect_permanently(): void
    {
        $this->get('/real-estate-virtual-assistants')->assertStatus(301)->assertRedirect('/services');
        $this->get('/real-estate-virtual-assistants/crm-management')->assertStatus(301)->assertRedirect('/services/crm-management');
    }

    public function test_sitemap_lists_service_pages(): void
    {
        $this->get('/sitemap.xml')->assertOk()
            ->assertHeader('Content-Type', 'application/xml')
            ->assertSee('/services/crm-management', false);
    }
}
