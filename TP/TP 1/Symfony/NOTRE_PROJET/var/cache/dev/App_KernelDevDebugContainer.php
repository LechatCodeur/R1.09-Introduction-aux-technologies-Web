<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMXMVYJr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMXMVYJr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMXMVYJr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMXMVYJr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMXMVYJr\App_KernelDevDebugContainer([
    'container.build_hash' => 'MXMVYJr',
    'container.build_id' => 'd97835b6',
    'container.build_time' => 1736428439,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMXMVYJr');
