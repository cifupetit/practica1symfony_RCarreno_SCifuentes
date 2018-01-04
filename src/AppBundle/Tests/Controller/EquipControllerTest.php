<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EquipControllerTest extends WebTestCase
{
    public function testLlistartotequip()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/llistarTotEquip');
    }

}
