<?php

namespace ContainerFwyfxQj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManagedByRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ManagedByRepository' shared autowired service.
     *
     * @return \App\Repository\ManagedByRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ManagedByRepository'] = new \App\Repository\ManagedByRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}