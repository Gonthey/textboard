<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit791b6faeeed60d9fd15f7a550f4f1fe3
=======
class ComposerAutoloaderInit05f26ee683cf424b110fd9db9d2b3def
>>>>>>> a080c7ff66976f24c45554450d4f83fb8c65bbf9
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit791b6faeeed60d9fd15f7a550f4f1fe3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit791b6faeeed60d9fd15f7a550f4f1fe3', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit05f26ee683cf424b110fd9db9d2b3def', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit05f26ee683cf424b110fd9db9d2b3def', 'loadClassLoader'));
>>>>>>> a080c7ff66976f24c45554450d4f83fb8c65bbf9

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInit791b6faeeed60d9fd15f7a550f4f1fe3::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInit05f26ee683cf424b110fd9db9d2b3def::getInitializer($loader));
>>>>>>> a080c7ff66976f24c45554450d4f83fb8c65bbf9
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        return $loader;
    }
}
