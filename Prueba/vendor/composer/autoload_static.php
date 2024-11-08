<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46d4debc6206d17fead443a47064a1d8
{
    public static $files = array (
        '4d4cbd3f1f210ef21ce386b8fbc14a25' => __DIR__ . '/../..' . '/app/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hackzilla\\PasswordGenerator\\' => 28,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hackzilla\\PasswordGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/hackzilla/password-generator',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46d4debc6206d17fead443a47064a1d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46d4debc6206d17fead443a47064a1d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46d4debc6206d17fead443a47064a1d8::$classMap;

        }, null, ClassLoader::class);
    }
}