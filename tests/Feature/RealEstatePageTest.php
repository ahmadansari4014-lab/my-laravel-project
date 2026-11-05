<?php

namespace Tests\Feature;

use Tests\TestCase;

class RealEstatePageTest extends TestCase
{
    public function test_real_estate_page_loads_and_is_linked_in_nav(): void
    {
        $this->get('/real-estate-virtual-assistants')
            ->assertOk()
            ->assertSee('Real Estate Virtual Assistants')
            ->assertSee('Transaction Coordination')
            ->assertSee('tel:+15055289454', false)
            ->assertSee('"@type":"FAQPage"', false);

        $this->get('/')->assertSee('/real-estate-virtual-assistants', false);
    }
}
