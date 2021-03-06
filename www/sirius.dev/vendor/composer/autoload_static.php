<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7879f70e002f856068c157b5ade8d0bd
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Krugozor\\Database\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Krugozor\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/krugozor/database/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7879f70e002f856068c157b5ade8d0bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7879f70e002f856068c157b5ade8d0bd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
