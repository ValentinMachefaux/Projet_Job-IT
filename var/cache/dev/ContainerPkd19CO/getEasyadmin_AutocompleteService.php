<?php

namespace ContainerPkd19CO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_AutocompleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'easyadmin.autocomplete' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Search\Autocomplete
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'Autocomplete.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'Finder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'Paginator.php';

        return $container->services['easyadmin.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Autocomplete(($container->services['easyadmin.config.manager'] ?? $container->getEasyadmin_Config_ManagerService()), new \EasyCorp\Bundle\EasyAdminBundle\Search\Finder(($container->services['easyadmin.query_builder'] ?? $container->load('getEasyadmin_QueryBuilderService')), ($container->services['easyadmin.paginator'] ?? ($container->services['easyadmin.paginator'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator()))), ($container->services['easyadmin.property_accessor'] ?? $container->getEasyadmin_PropertyAccessorService()));
    }
}
