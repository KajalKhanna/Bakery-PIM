<?php

namespace ContainerFwyfxQj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostEntitySubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\EventSubscriber\PostEntitySubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\PostEntitySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\EventSubscriber\\PostEntitySubscriber'] = new \App\EventSubscriber\PostEntitySubscriber(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->privates['slugger'] ?? ($container->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('en'))));
    }
}
