<?php

namespace ContainerYdqXUS9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDepotRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\DepotRepository' shared autowired service.
     *
     * @return \App\Repository\DepotRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\DepotRepository'] = new \App\Repository\DepotRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
