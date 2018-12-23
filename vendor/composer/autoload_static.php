<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee7908f12bde6803fe3a0e01ee9d9e3f
{
    public static $files = array (
        '67bb8d64afd906844a5c02abdf9142ab' => __DIR__ . '/..' . '/karamel/http/src/Helpers/Helpers.php',
        'a6a3598dc1893bc3f8bad4c3d44d5355' => __DIR__ . '/../..' . '/src/Helpers/View.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Karamel\\View\\' => 13,
            'Karamel\\Http\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Karamel\\View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Karamel\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/karamel/http/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee7908f12bde6803fe3a0e01ee9d9e3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee7908f12bde6803fe3a0e01ee9d9e3f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
