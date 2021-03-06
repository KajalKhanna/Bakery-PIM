<?php

namespace ContainerFwyfxQj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMenuCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\MenuCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\MenuCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\MenuCrudController'] = $instance = new \App\Controller\Admin\MenuCrudController(($container->privates['App\\Repository\\MenuRepository'] ?? $container->load('getMenuRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.7Gh9pQb'] ?? $container->load('get_ServiceLocator_7Gh9pQbService'))->withContext('App\\Controller\\Admin\\MenuCrudController', $container));

        return $instance;
    }
}
