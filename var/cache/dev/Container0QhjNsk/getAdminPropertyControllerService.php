<?php

namespace Container0QhjNsk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminPropertyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdminPropertyController' shared autowired service.
     *
     * @return \App\Controller\AdminPropertyController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdminPropertyController'] = $instance = new \App\Controller\AdminPropertyController(($container->privates['App\\Repository\\PropertyRepository'] ?? $container->load('getPropertyRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\AdminPropertyController', $container));

        return $instance;
    }
}
