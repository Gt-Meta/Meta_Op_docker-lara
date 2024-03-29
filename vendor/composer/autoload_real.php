<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6bbf1283b4547f4cf9f2d1cbfef25ebd
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit6bbf1283b4547f4cf9f2d1cbfef25ebd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6bbf1283b4547f4cf9f2d1cbfef25ebd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit6bbf1283b4547f4cf9f2d1cbfef25ebd::getInitializer($loader)();

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit6bbf1283b4547f4cf9f2d1cbfef25ebd::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire6bbf1283b4547f4cf9f2d1cbfef25ebd($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire6bbf1283b4547f4cf9f2d1cbfef25ebd($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
