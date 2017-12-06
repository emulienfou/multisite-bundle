<?php

namespace Alex\MultisiteBundle\Tests\Functional\DemoApp_NoSort;

use Alex\MultisiteBundle\Tests\Functional\AbstractAppKernel;

class AppKernel extends AbstractAppKernel
{
    /**
     * {@inheritdoc}
     */
    public function getAdditionalBundles()
    {
        return array(
            new \Alex\MultisiteBundle\Tests\Functional\DemoApp_NoSort\DemoBundle\AlexMultisiteDemoBundle(),
        );
    }
}
