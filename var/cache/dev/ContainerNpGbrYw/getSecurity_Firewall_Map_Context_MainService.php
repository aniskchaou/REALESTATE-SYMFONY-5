<?php

namespace ContainerNpGbrYw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService());
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $c = new \Symfony\Component\EventDispatcher\EventDispatcher();
        $c->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.default.main'] ?? $container->load('getSecurity_Logout_Listener_Default_MainService'));
        }, 1 => 'onLogout'], 64);
        $c->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.session.main'] ?? ($container->privates['security.logout.listener.session.main'] = new \Symfony\Component\Security\Http\EventListener\SessionLogoutListener()));
        }, 1 => 'onLogout'], 0);
        $c->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.csrf_token_clearing'] ?? $container->load('getSecurity_Logout_Listener_CsrfTokenClearingService'));
        }, 1 => 'onLogout'], 0);

        return $container->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? $container->load('getSecurity_ContextListener_0Service'));
            yield 2 => ($container->privates['security.authentication.listener.form.main'] ?? $container->load('getSecurity_Authentication_Listener_Form_MainService'));
            yield 3 => ($container->privates['security.authentication.listener.basic.main'] ?? $container->load('getSecurity_Authentication_Listener_Basic_MainService'));
            yield 4 => ($container->privates['security.authentication.listener.anonymous.main'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_MainService'));
            yield 5 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $b, 'main', ($container->privates['security.authentication.form_entry_point.main'] ?? $container->load('getSecurity_Authentication_FormEntryPoint_MainService')), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, $c, ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.from_database', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, [0 => 'form_login', 1 => 'http_basic', 2 => 'anonymous'], NULL), ($container->privates['security.untracked_token_storage'] ?? ($container->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }
}
