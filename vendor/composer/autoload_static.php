<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita98313a8ede4da396dbb7d355fc30e96
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'ThirtySix' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'M' => 
        array (
            'Model' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'C' => 
        array (
            'Controller' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita98313a8ede4da396dbb7d355fc30e96::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}