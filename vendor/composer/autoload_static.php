<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9af05ee846860097a314f647dcafd415
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Delphinmario\\Codepackage\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Delphinmario\\Codepackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9af05ee846860097a314f647dcafd415::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9af05ee846860097a314f647dcafd415::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9af05ee846860097a314f647dcafd415::$classMap;

        }, null, ClassLoader::class);
    }
}
