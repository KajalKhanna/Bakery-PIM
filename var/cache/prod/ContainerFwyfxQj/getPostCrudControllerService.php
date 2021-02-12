<?php

namespace ContainerFwyfxQj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\PostCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\PostCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\PostCrudController'] = $instance = new \App\Controller\Admin\PostCrudController((isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']() : $container->getAdminUrlGeneratorService()), ($container->privates['App\\Repository\\PostCategoryRepository'] ?? $container->load('getPostCategoryRepositoryService')), ($container->privates['App\\Repository\\PostRepository'] ?? $container->load('getPostRepositoryService')), ($container->privates['slugger'] ?? ($container->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('en'))), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));

        $instance->setContainer(($container->privates['.service_locator.7Gh9pQb'] ?? $container->load('get_ServiceLocator_7Gh9pQbService'))->withContext('App\\Controller\\Admin\\PostCrudController', $container));

        return $instance;
    }
}
