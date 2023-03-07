<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testRoutes(): void
    {
        // Create fake client
        $client = static::createClient();

        // Request specific page
        $client->request('GET', '/api');

        // Validate success
        $this->assertResponseIsSuccessful();
    }
}
