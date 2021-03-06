<?php

namespace Container8hfKO7u;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Form_Type_FiltersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.form.type.filters' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminFiltersFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'EasyAdminFiltersFormType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'TypeConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'CodeEditorTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'TextareaTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'AutocompleteTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'CollectionTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'CheckboxTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'ChoiceFilterTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'EntityTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'IvoryCKEditorTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'FOSCKEditorTypeConfigurator.php';

        return $container->privates['easyadmin.form.type.filters'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminFiltersFormType(($container->services['easyadmin.config.manager'] ?? $container->getEasyadmin_Config_ManagerService()), [9 => ($container->privates['easyadmin.form.type.configurator.code_editor'] ?? ($container->privates['easyadmin.form.type.configurator.code_editor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CodeEditorTypeConfigurator())), 8 => ($container->privates['easyadmin.form.type.configurator.textarea'] ?? ($container->privates['easyadmin.form.type.configurator.textarea'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TextareaTypeConfigurator())), 7 => ($container->privates['easyadmin.form.type.configurator.autocomplete'] ?? ($container->privates['easyadmin.form.type.configurator.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\AutocompleteTypeConfigurator())), 6 => ($container->privates['easyadmin.form.type.configurator.collection'] ?? ($container->privates['easyadmin.form.type.configurator.collection'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CollectionTypeConfigurator())), 5 => ($container->privates['easyadmin.form.type.configurator.checkbox'] ?? ($container->privates['easyadmin.form.type.configurator.checkbox'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CheckboxTypeConfigurator())), 4 => ($container->privates['easyadmin.filter.type.configurator.choice'] ?? ($container->privates['easyadmin.filter.type.configurator.choice'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\Configurator\ChoiceFilterTypeConfigurator())), 3 => ($container->privates['easyadmin.form.type.configurator.type'] ?? $container->load('getEasyadmin_Form_Type_Configurator_TypeService')), 2 => ($container->privates['easyadmin.form.type.configurator.entity'] ?? ($container->privates['easyadmin.form.type.configurator.entity'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\EntityTypeConfigurator())), 1 => ($container->privates['easyadmin.form.type.configurator.ivory_ckeditor'] ?? ($container->privates['easyadmin.form.type.configurator.ivory_ckeditor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\IvoryCKEditorTypeConfigurator())), 0 => ($container->privates['easyadmin.form.type.configurator.fos_ckeditor'] ?? ($container->privates['easyadmin.form.type.configurator.fos_ckeditor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\FOSCKEditorTypeConfigurator()))]);
    }
}
