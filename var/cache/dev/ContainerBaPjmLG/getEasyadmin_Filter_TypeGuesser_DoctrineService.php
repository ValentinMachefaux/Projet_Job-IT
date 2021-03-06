<?php

namespace ContainerBaPjmLG;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Filter_TypeGuesser_DoctrineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.filter.type_guesser.doctrine' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Guesser\DoctrineOrmFilterTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'DoctrineOrmTypeGuesser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Guesser'.\DIRECTORY_SEPARATOR.'DoctrineOrmFilterTypeGuesser.php';

        return $container->privates['easyadmin.filter.type_guesser.doctrine'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Guesser\DoctrineOrmFilterTypeGuesser(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
