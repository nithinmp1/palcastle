<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2f4574b7567b9e6dfb6bb601adfe001
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2f4574b7567b9e6dfb6bb601adfe001::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2f4574b7567b9e6dfb6bb601adfe001::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc2f4574b7567b9e6dfb6bb601adfe001::$classMap;

        }, null, ClassLoader::class);
    }
}
