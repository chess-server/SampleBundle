<?php
/*******************************************************************************
 *
 * Configuration -- define the onfiguration data
 * Version: 1.0.0
 *
 * Changelog:
 * 1.0.1:
 *
 *******************************************************************************/
namespace Acme\SampleBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder() : TreeBuilder
    {
        $treeBuilder = new TreeBuilder('acme_sample');

        $treeBuilder->getRootNode()
        ;

        return $treeBuilder;
    }
}
