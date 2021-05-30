<?php

namespace App\Tests;

use Symfony\Component\Panther\PantherTestCase;

class DefaultControllerTest extends PantherTestCase
{
    public function testSomething(): void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/');

        $this->assertSelectorTextContains('h3', 'Now we have an image:');
        $this->assertSame('image', $crawler->filter('img')->getAttribute('class'));
        $client->takeScreenshot('screen.png');

        sleep(2);

        $crawler = $client->request('GET', '/second');

        $this->assertSame('SECOND PAGE!', $crawler->filter('h1')->getText());

        sleep(10);
    }
}
