<?php

namespace ContainerKkGQnAM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X45Eo_OService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.x45Eo.o' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.x45Eo.o'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'mailer' => '?',
            'passwordEncoder' => '?',
        ]);
    }
}
