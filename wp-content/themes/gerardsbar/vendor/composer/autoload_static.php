<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a8580484e5618c0b48a4402e8e17b6a
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mandrill' => 
            array (
                0 => __DIR__ . '/..' . '/mandrill/mandrill/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1a8580484e5618c0b48a4402e8e17b6a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
