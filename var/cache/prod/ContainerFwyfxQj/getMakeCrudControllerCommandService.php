<?php

namespace ContainerFwyfxQj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeCrudControllerCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand(\dirname(__DIR__, 4), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] = new \EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker(($container->services['kernel'] ?? $container->get('kernel', 1)), \dirname(__DIR__, 4)))), ($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setName('make:admin:crud');

        return $instance;
    }
}
