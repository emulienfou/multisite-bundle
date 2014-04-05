<?php

namespace Alex\MultisiteBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration for multisite extension.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('alex_multisite');

        $rootNode
            ->children()
                ->scalarNode('default_branding')->isRequired()->end()
                ->scalarNode('default_locale')->isRequired()->end()
                ->arrayNode('brandings')
                    ->prototype('array')
                        ->prototype('array')
                            ->children()
                                ->scalarNode('host')->end()
                                ->scalarNode('prefix')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
