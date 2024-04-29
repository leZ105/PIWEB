<?php

namespace ContainerGN8jdcC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Session_DeprecatedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.session.deprecated' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\SessionInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'DeprecatedSessionFactory.php';

        return $container->privates['.session.deprecated'] = (new \Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))))->getSession();
    }
}
