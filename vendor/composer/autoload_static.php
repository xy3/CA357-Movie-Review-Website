<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bc6c7ca89a468da95897f0e397de204
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0bc6c7ca89a468da95897f0e397de204::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0bc6c7ca89a468da95897f0e397de204::$classMap;

        }, null, ClassLoader::class);
    }
}
