<?php
/*******************************************************************************
 *
 * AcmeXXX_SHORT_BUNDLE_XXXExtension -- load code extension
 * Version: 1.0.0
 *
 * Changelog:
 * 1.0.1:
 *
 *******************************************************************************/
namespace Acme\SampleBundle\DependencyInjection;

use Acme\SampleBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Exception;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class AcmeSampleExtension extends Extension
{
    /**
     * {@inheritdoc}
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container) : void
    {
        $configuration = $this->getConfiguration($configs, $container);
        $loader = new Loader\PhpFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('sample_config.php');
        $config = $this->processConfiguration($configuration, $configs);

        $service = $this->getAlias();
        foreach ($config as $key => $value) {
            $container->setParameter(sprintf('%s.%s', $service, $key), $value);
        }
    }
}
