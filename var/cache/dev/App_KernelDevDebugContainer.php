<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLXxSv2u\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLXxSv2u/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLXxSv2u.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLXxSv2u\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLXxSv2u\App_KernelDevDebugContainer([
    'container.build_hash' => 'LXxSv2u',
    'container.build_id' => '2f25143c',
    'container.build_time' => 1606140370,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLXxSv2u');
