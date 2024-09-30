<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45986d12da49841b0f912ea5b43cf4a6
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WoutVW\\SVGator\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WoutVW\\SVGator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit45986d12da49841b0f912ea5b43cf4a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45986d12da49841b0f912ea5b43cf4a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45986d12da49841b0f912ea5b43cf4a6::$classMap;

        }, null, ClassLoader::class);
    }
}