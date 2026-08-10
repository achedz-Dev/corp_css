<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginMockupTest extends TestCase
{
    public function test_login_mockup_page_loads(): void
    {
        $response = $this->get('/login');

        $response->assertOk();
        $response->assertSee('Secure access for university services');
    }
}
