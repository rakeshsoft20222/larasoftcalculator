<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc0add0a381983a6551d3d841b380500
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakeshsoft\\Calculator\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakeshsoft\\Calculator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc0add0a381983a6551d3d841b380500::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc0add0a381983a6551d3d841b380500::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbc0add0a381983a6551d3d841b380500::$classMap;

        }, null, ClassLoader::class);
    }
}
