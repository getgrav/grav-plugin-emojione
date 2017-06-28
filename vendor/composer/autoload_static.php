<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19ef0d4084a1180793ad399602196ec6
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Emojione\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Emojione\\' => 
        array (
            0 => __DIR__ . '/..' . '/emojione/emojione/lib/php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19ef0d4084a1180793ad399602196ec6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19ef0d4084a1180793ad399602196ec6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
