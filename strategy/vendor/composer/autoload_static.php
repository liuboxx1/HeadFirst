<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2b2d734b138eb9a62dd791fdde605e5
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2b2d734b138eb9a62dd791fdde605e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2b2d734b138eb9a62dd791fdde605e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2b2d734b138eb9a62dd791fdde605e5::$classMap;

        }, null, ClassLoader::class);
    }
}
