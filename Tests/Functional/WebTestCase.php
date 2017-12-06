<?php

namespace Alex\MultisiteBundle\Tests\Functional;

use Symfony\Component\HttpKernel\Client;
use PHPUnit\Framework\TestCase;

abstract class WebTestCase extends TestCase
{
    static public function createClient($fixture = 'DemoApp')
    {
        $class = 'Alex\MultisiteBundle\Tests\Functional\\'.$fixture.'\AppKernel';
        $app = new $class('dev', true);

        return new Client($app);
    }
}
