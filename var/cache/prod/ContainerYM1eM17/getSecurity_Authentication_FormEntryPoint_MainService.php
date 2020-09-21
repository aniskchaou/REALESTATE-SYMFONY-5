<?php

namespace ContainerYM1eM17;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_FormEntryPoint_MainService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.form_entry_point.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authentication.form_entry_point.main'] = new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), '/login', false);
    }
}
