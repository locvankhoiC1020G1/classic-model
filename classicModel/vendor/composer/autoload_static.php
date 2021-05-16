<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31724b3ec448c4c7981703746deafba0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31724b3ec448c4c7981703746deafba0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31724b3ec448c4c7981703746deafba0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
