<?php

namespace App\Tests;

use Symfony\Component\Panther\PantherTestCase;

class HelloWorkdTest extends PantherTestCase
{
    public function testSomething(): void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/');

        $this->assertSelectorTextContains('h1', 'Symfony 6.0.1');
        $client->takeScreenshot('tests/screenshots/screen.png');
    }
    public function testHello(): void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/hello/meelo');

        $this->assertSelectorTextContains('h1', 'meelo');
        $client->takeScreenshot('tests/screenshots/hello.png');
    }
}
