<?php

namespace ContainerYHdxwCz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotifier_TransportFactory_LinkedinService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'notifier.transport_factory.linkedin' shared service.
     *
     * @return \Symfony\Component\Notifier\Bridge\LinkedIn\LinkedInTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'linked-in-notifier'.\DIRECTORY_SEPARATOR.'LinkedInTransportFactory.php';

        return new \Symfony\Component\Notifier\Bridge\LinkedIn\LinkedInTransportFactory(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()));
    }
}
