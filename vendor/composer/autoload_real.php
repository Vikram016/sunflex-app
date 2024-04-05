<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit125917027247e67e5b8faee93a0ae90c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit125917027247e67e5b8faee93a0ae90c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit125917027247e67e5b8faee93a0ae90c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit125917027247e67e5b8faee93a0ae90c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
