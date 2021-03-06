<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5c686d00cd3f679fdb926659bfaf53c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5c686d00cd3f679fdb926659bfaf53c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5c686d00cd3f679fdb926659bfaf53c::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInite5c686d00cd3f679fdb926659bfaf53c::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
