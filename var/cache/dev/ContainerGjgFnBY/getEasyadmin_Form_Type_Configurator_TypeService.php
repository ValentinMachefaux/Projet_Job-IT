<?php

namespace ContainerGjgFnBY;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Form_Type_Configurator_TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.form.type.configurator.type' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TypeConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'TypeConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'TypeConfigurator.php';

        return $container->privates['easyadmin.form.type.configurator.type'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TypeConfigurator(($container->services['easyadmin.config.manager'] ?? $container->getEasyadmin_Config_ManagerService()));
    }
}