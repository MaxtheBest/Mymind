<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB6Mh6Bi\srcProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB6Mh6Bi/srcProdProjectContainer.php') {
    touch(__DIR__.'/ContainerB6Mh6Bi.legacy');

    return;
}

if (!\class_exists(srcProdProjectContainer::class, false)) {
    \class_alias(\ContainerB6Mh6Bi\srcProdProjectContainer::class, srcProdProjectContainer::class, false);
}

return new \ContainerB6Mh6Bi\srcProdProjectContainer(array(
    'container.build_hash' => 'B6Mh6Bi',
    'container.build_id' => 'd314b30b',
    'container.build_time' => 1520078058,
));
