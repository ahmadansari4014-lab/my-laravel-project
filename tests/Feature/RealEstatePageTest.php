<?php

namespace Tests\Feature;

use Tests\TestCase;

class RealEstatePageTest extends TestCase
{
    public function test_real_estate_page_lists_services_and_is_linked_in_nav(): void
    {
        $response = $this->get('/real-estate-virtual-assistants')->assertOk()
            ->assertSee('Real Estate Virtual Assistants')
            ->assertSee('tel:+15055289454', false)
            ->assertSee('"@type":"FAQPage"', false);

        foreach (config('real-estate-services') as $slug => $service) {
            $response->assertSee($service['title'])
                ->assertSee('/real-estate-virtual-assistants/' . $slug, false);
        }

        $this->get('/')->assertSee('/real-estate-virtual-assistants', false);
    }

    public function test_every_service_has_a_detail_page(): void
    {
        foreach (config('real-estate-services') as $slug => $service) {
            $this->get('/real-estate-virtual-assistants/' . $slug)
                ->assertOk()
                ->assertSee($service['title'])
                ->assertSee($service['includes'][0]);
        }
    }

    public function test_unknown_service_returns_404(): void
    {
        $this->get('/real-estate-virtual-assistants/not-a-service')->assertNotFound();
    }
}
