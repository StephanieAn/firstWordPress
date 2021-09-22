<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55358855da0f5aed9b5d45aa0f43f994
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Styx\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Styx\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55358855da0f5aed9b5d45aa0f43f994::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55358855da0f5aed9b5d45aa0f43f994::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
