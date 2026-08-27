<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_root_route_returns_template_greeting(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSeeText('Hello from ${{ values.name }}');
    }
}
