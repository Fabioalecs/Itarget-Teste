<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b5f50e1072d1611f42517079444b71e
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'ItargetTest\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ItargetTest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b5f50e1072d1611f42517079444b71e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b5f50e1072d1611f42517079444b71e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b5f50e1072d1611f42517079444b71e::$classMap;

        }, null, ClassLoader::class);
    }
}
