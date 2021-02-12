<?php

namespace ContainerFwyfxQj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_WorkflowDumpService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.workflow_dump' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.workflow_dump'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand();

        $instance->setName('workflow:dump');

        return $instance;
    }
}
