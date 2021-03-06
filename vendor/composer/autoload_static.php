<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60111ed7e18ac10185529631b33992ff
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60111ed7e18ac10185529631b33992ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60111ed7e18ac10185529631b33992ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
