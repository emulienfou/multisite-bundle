<?php

namespace Alex\MultisiteBundle\Tests\Branding;

use Alex\MultisiteBundle\Branding\Branding;
use PHPUnit\Framework\TestCase;

class BrandingTest extends TestCase
{
    public function testName()
    {
        $branding = new Branding('foo', array());
        $this->assertEquals('foo', $branding->getName());
    }

    public function testHasLocale()
    {
        $branding = new Branding('foo', array(
            'fr_FR' => array('host' => 'foo')
        ));

        $this->assertFalse($branding->hasLocale('en_GB'));
        $this->assertTrue($branding->hasLocale('fr_FR'));
    }

    public function testGetHost()
    {
        $branding = new Branding('foo', array(
            'fr_FR' => array('host' => 'foo')
        ));

        $this->assertEquals('foo', $branding->getHost('fr_FR'));
        $this->assertNull($branding->getHost('en_GB'));
    }

    public function testGetOption()
    {
        $branding = new Branding('foo', array('fr_FR' => array('bar' => 'bar')));
        $this->assertEquals('bar', $branding->getOption('fr_FR', 'bar'));
    }

    public function testPrefixPath()
    {
        $branding = new Branding('foo', array(
            'fr_FR' => array('prefix' => '/test')
        ));

        $this->assertEquals('/test/fr', $branding->prefixPath('fr_FR', '/fr'));
        $this->assertEquals('/fr', $branding->prefixPath('en_GB', '/fr'));
    }
}
