<?php

namespace ContainerGN8jdcC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TtJxBw_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ttJxBw.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ttJxBw.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commande' => ['privates', '.errored..service_locator.ttJxBw..App\\Entity\\Commande', NULL, 'Cannot autowire service ".service_locator.ttJxBw.": it references class "App\\Entity\\Commande" but no such service exists.'],
        ], [
            'commande' => 'App\\Entity\\Commande',
        ]);
    }
}
