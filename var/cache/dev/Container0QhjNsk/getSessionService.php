<?php

namespace Container0QhjNsk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($container->privates['session.storage.native'] ?? $container->load('getSession_Storage_NativeService')), NULL, NULL, [0 => ($container->privates['session_listener'] ?? $container->getSessionListenerService()), 1 => 'onSessionUsage']);
    }
}
