<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9e7218f71d5874b5632927df4f72bd7
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
        '0d59ee240a4cd96ddbb4ff164fccea4d' => __DIR__ . '/..' . '/symfony/polyfill-php73/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SzepeViktor\\PHPStan\\WordPress\\' => 30,
            'Symfony\\Polyfill\\Php73\\' => 23,
        ),
        'P' => 
        array (
            'PHPStan\\ExtensionInstaller\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SzepeViktor\\PHPStan\\WordPress\\' => 
        array (
            0 => __DIR__ . '/..' . '/szepeviktor/phpstan-wordpress/src',
        ),
        'Symfony\\Polyfill\\Php73\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php73',
        ),
        'PHPStan\\ExtensionInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpstan/extension-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'JsonException' => __DIR__ . '/..' . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9e7218f71d5874b5632927df4f72bd7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9e7218f71d5874b5632927df4f72bd7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9e7218f71d5874b5632927df4f72bd7::$classMap;

        }, null, ClassLoader::class);
    }
}
