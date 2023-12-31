<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1427b3aa4702ac551fc8c0377f9fb43
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1427b3aa4702ac551fc8c0377f9fb43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1427b3aa4702ac551fc8c0377f9fb43::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf1427b3aa4702ac551fc8c0377f9fb43::$classMap;

        }, null, ClassLoader::class);
    }
}
