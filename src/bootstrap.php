<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

AnnotationRegistry::registerLoader(function ($class) {
    if (strpos($class, 'PSX\Schema\Parser\Popo\Annotation') === 0) {
        spl_autoload_call($class);
        return class_exists($class, false);
    }
});


