<?php

namespace ContainerFwyfxQj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNumberConfiguratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\NumberConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] = new \EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter())));
    }
}
