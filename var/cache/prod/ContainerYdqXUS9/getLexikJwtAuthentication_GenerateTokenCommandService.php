<?php

namespace ContainerYdqXUS9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_GenerateTokenCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'lexik_jwt_authentication.generate_token_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['lexik_jwt_authentication.generate_token_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand(($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService'));
            yield 1 => ($container->privates['security.user.provider.concrete.app_client_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppClientProviderService'));
            yield 2 => ($container->privates['security.user.provider.concrete.all_users'] ?? $container->load('getSecurity_User_Provider_Concrete_AllUsersService'));
        }, 3));

        $instance->setName('lexik:jwt:generate-token');

        return $instance;
    }
}