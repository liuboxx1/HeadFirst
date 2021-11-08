<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89ecd637bdeb8a48e053c17d9e605d9b
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89ecd637bdeb8a48e053c17d9e605d9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89ecd637bdeb8a48e053c17d9e605d9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit89ecd637bdeb8a48e053c17d9e605d9b::$classMap;

        }, null, ClassLoader::class);
    }
}
