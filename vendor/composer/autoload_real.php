<?php

// autoload_real.php @generated by Composer

<<<<<<< Updated upstream
class ComposerAutoloaderInit56bfe212e593d5f267d97422c35bc680
=======
class ComposerAutoloaderInit15627edfa05cc14150f9dfe1e5c156a2
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
        spl_autoload_register(array('ComposerAutoloaderInit56bfe212e593d5f267d97422c35bc680', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit56bfe212e593d5f267d97422c35bc680', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit56bfe212e593d5f267d97422c35bc680::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit56bfe212e593d5f267d97422c35bc680::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire56bfe212e593d5f267d97422c35bc680($fileIdentifier, $file);
=======
        spl_autoload_register(array('ComposerAutoloaderInit15627edfa05cc14150f9dfe1e5c156a2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit15627edfa05cc14150f9dfe1e5c156a2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit15627edfa05cc14150f9dfe1e5c156a2::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit15627edfa05cc14150f9dfe1e5c156a2::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire15627edfa05cc14150f9dfe1e5c156a2($fileIdentifier, $file);
>>>>>>> Stashed changes
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
<<<<<<< Updated upstream
function composerRequire56bfe212e593d5f267d97422c35bc680($fileIdentifier, $file)
=======
function composerRequire15627edfa05cc14150f9dfe1e5c156a2($fileIdentifier, $file)
>>>>>>> Stashed changes
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
