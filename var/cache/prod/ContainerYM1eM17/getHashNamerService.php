<?php

namespace ContainerYM1eM17;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHashNamerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Vich\UploaderBundle\Naming\HashNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\HashNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Vich\\UploaderBundle\\Naming\\HashNamer'] = new \Vich\UploaderBundle\Naming\HashNamer();
    }
}
