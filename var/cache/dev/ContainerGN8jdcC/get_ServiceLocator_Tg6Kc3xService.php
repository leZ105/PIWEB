<?php

namespace ContainerGN8jdcC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tg6Kc3xService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tg6Kc3x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tg6Kc3x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'resto' => ['privates', '.errored..service_locator.tg6Kc3x.App\\Entity\\Resto', NULL, 'Cannot autowire service ".service_locator.tg6Kc3x": it references class "App\\Entity\\Resto" but no such service exists.'],
        ], [
            'resto' => 'App\\Entity\\Resto',
        ]);
    }
}
