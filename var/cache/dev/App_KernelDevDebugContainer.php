<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBaPjmLG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBaPjmLG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBaPjmLG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBaPjmLG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBaPjmLG\App_KernelDevDebugContainer([
    'container.build_hash' => 'BaPjmLG',
    'container.build_id' => '073c1068',
    'container.build_time' => 1606413064,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBaPjmLG');
