<?php

namespace ContainerGUxTCRQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U4BbnsnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.U4Bbnsn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.U4Bbnsn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'assets' => ['privates', '.errored..service_locator.U4Bbnsn.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets', NULL, 'Cannot autowire service ".service_locator.U4Bbnsn": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets" but no such service exists.'],
        ], [
            'assets' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets',
        ]);
    }
}
