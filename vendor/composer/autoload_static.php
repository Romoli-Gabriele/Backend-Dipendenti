<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb74db0919d96ba5d11c3634df772b52
{
    public static $classMap = array (
        'ComposerAutoloaderInitcb74db0919d96ba5d11c3634df772b52' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitcb74db0919d96ba5d11c3634df772b52' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'dipentente' => __DIR__ . '/../..' . '/core/dipendente.php',
        'queryBuilder' => __DIR__ . '/../..' . '/core/QueryBuilder.php',
        'router' => __DIR__ . '/../..' . '/core/router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcb74db0919d96ba5d11c3634df772b52::$classMap;

        }, null, ClassLoader::class);
    }
}
