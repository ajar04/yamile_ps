<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1xwxg4c\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1xwxg4c/appProdProjectContainer.php') {
    touch(__DIR__.'/Container1xwxg4c.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container1xwxg4c\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container1xwxg4c\appProdProjectContainer([
    'container.build_hash' => '1xwxg4c',
    'container.build_id' => '39397af8',
    'container.build_time' => 1560303288,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1xwxg4c');
