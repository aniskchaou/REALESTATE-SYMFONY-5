<?php

namespace ContainerMJOEhu6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PropertyType' shared autowired service.
     *
     * @return \App\Form\PropertyType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\PropertyType'] = new \App\Form\PropertyType();
    }
}
