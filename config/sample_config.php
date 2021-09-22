<?php

declare(strict_types=1);

use Acme\SampleBundle\Controller\SampleController;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autoconfigure()
        ->autowire()
        ->private()
        ->set(SampleController::class)
//        ->bind('$projectDir','%kernel.project_dir%')   // sample but usable!
    ;

};
