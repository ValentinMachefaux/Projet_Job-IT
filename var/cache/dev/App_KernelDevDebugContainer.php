<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFGrze07\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFGrze07/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFGrze07.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFGrze07\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFGrze07\App_KernelDevDebugContainer([
    'container.build_hash' => 'FGrze07',
    'container.build_id' => 'fc0712f9',
    'container.build_time' => 1606404006,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFGrze07');
