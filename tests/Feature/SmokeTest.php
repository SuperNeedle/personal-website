<?php

namespace Tests\Feature;

use Tests\TestCase;

class SmokeTest extends TestCase
{
    /**
     * Placeholder smoke test asserting the homepage returns 200 status.
     */
    public function test_homepage_returns_successful_response(): void
    {
        // Placeholder smoke test — proves the CI test-running mechanism works. Replace/expand with real tests as business logic is added.
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
