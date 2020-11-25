<?php

namespace ContainerPkd19CO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_QueryBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'easyadmin.query_builder' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Search\QueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'QueryBuilder.php';

        return $container->services['easyadmin.query_builder'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\QueryBuilder(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
