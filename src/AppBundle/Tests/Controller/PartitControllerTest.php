<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartitControllerTest extends WebTestCase
{
    public function testAddpartit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addPartit');
    }

    public function testUpdatepartit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updatePartit');
    }

    public function testDeletepartit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deletePartit');
    }

}
