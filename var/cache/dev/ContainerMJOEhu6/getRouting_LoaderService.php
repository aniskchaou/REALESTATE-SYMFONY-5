<?php

namespace ContainerMJOEhu6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)));
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ])));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true], []);
    }
}
