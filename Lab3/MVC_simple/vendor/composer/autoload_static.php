<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9e05f983b237b8b1f69d9025ba089cb
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\core\\' => 9,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9e05f983b237b8b1f69d9025ba089cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9e05f983b237b8b1f69d9025ba089cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9e05f983b237b8b1f69d9025ba089cb::$classMap;

        }, null, ClassLoader::class);
    }
}
