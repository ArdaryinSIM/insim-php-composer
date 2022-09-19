<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6e1bc0fbd34e43564746e24ac9bb03b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Marwen\\ApiSolo\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Marwen\\ApiSolo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6e1bc0fbd34e43564746e24ac9bb03b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6e1bc0fbd34e43564746e24ac9bb03b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6e1bc0fbd34e43564746e24ac9bb03b::$classMap;

        }, null, ClassLoader::class);
    }
}
