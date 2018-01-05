<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41f47502caeb8d8df7b2c93d98c664e2
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tests\\testEntity\\' => 17,
            'tests\\testDao\\' => 14,
            'tests\\testAction\\' => 17,
        ),
        'm' => 
        array (
            'models\\service\\' => 15,
            'models\\entity\\' => 14,
            'models\\dao\\' => 11,
        ),
        'c' => 
        array (
            'commons\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tests\\testEntity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/testEntity',
        ),
        'tests\\testDao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/testDao',
        ),
        'tests\\testAction\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/testAction',
        ),
        'models\\service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models/service',
        ),
        'models\\entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models/entity',
        ),
        'models\\dao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models/dao',
        ),
        'commons\\' => 
        array (
            0 => __DIR__ . '/../..' . '/commons',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41f47502caeb8d8df7b2c93d98c664e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41f47502caeb8d8df7b2c93d98c664e2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}