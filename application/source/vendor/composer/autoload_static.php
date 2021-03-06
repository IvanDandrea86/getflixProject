<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdb284d8e8c011b4fd5af97006e46591
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdb284d8e8c011b4fd5af97006e46591::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdb284d8e8c011b4fd5af97006e46591::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcdb284d8e8c011b4fd5af97006e46591::$classMap;

        }, null, ClassLoader::class);
    }
}
