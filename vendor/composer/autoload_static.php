<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5f2a59a3b45b031c0bcb0c66c386613
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Learning\\Git\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Learning\\Git\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SebastianBergmann\\Version' => __DIR__ . '/..' . '/sebastian/version/src/Version.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5f2a59a3b45b031c0bcb0c66c386613::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5f2a59a3b45b031c0bcb0c66c386613::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5f2a59a3b45b031c0bcb0c66c386613::$classMap;

        }, null, ClassLoader::class);
    }
}