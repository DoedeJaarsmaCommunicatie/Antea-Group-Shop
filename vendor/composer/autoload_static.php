<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa5370b2447c60de2fa76f6b0dd3081b
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5d9c5be1aa1fbc12016e2c5bd16bbc70' => __DIR__ . '/..' . '/dusank/knapsack/src/collection_functions.php',
        'e5fde315a98ded36f9b25eb160f6c9fc' => __DIR__ . '/..' . '/dusank/knapsack/src/utility_functions.php',
        '89ff252b349d4d088742a09c25f5dd74' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/plugin-update-checker.php',
        'c39e5e966364f845b8dc03db0a1c135c' => __DIR__ . '/..' . '/aristath/kirki/kirki.php',
        '644832821dc5f369571c226eb740f0b8' => __DIR__ . '/../..' . '/src/app.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
            'Timber\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'PostTypes\\' => 10,
        ),
        'D' => 
        array (
            'DusanKasan\\Knapsack\\' => 20,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'Carbon_Fields\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Timber\\' => 
        array (
            0 => __DIR__ . '/..' . '/timber/timber/lib',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'PostTypes\\' => 
        array (
            0 => __DIR__ . '/..' . '/jjgrainger/posttypes/src',
        ),
        'DusanKasan\\Knapsack\\' => 
        array (
            0 => __DIR__ . '/..' . '/dusank/knapsack/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/asm89/twig-cache-extension/lib',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'R' => 
        array (
            'Routes' => 
            array (
                0 => __DIR__ . '/..' . '/upstatement/routes',
            ),
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa5370b2447c60de2fa76f6b0dd3081b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa5370b2447c60de2fa76f6b0dd3081b::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitfa5370b2447c60de2fa76f6b0dd3081b::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfa5370b2447c60de2fa76f6b0dd3081b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfa5370b2447c60de2fa76f6b0dd3081b::$classMap;

        }, null, ClassLoader::class);
    }
}
