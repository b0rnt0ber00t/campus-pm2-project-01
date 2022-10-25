<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit246c0d44e173f2bd461da8cf16271aa1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Report\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Report\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Modules\\Report\\app\\Enums\\StatusEnum' => __DIR__ . '/../..' . '/app/Enums/StatusEnum.php',
        'Modules\\Report\\app\\Http\\Controllers\\ReportController' => __DIR__ . '/../..' . '/app/Http/Controllers/ReportController.php',
        'Modules\\Report\\app\\Http\\Requests\\ReportRequest' => __DIR__ . '/../..' . '/app/Http/Requests/ReportRequest.php',
        'Modules\\Report\\app\\Http\\Requests\\ReportStoreRequest' => __DIR__ . '/../..' . '/app/Http/Requests/ReportStoreRequest.php',
        'Modules\\Report\\app\\Interfaces\\ReportInterface' => __DIR__ . '/../..' . '/app/Interfaces/ReportInterface.php',
        'Modules\\Report\\app\\Models\\Report' => __DIR__ . '/../..' . '/app/Models/Report.php',
        'Modules\\Report\\app\\Providers\\ReportServiceProvider' => __DIR__ . '/../..' . '/app/Providers/ReportServiceProvider.php',
        'Modules\\Report\\app\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/app/Providers/RouteServiceProvider.php',
        'Modules\\Report\\app\\Repositories\\ReportRepository' => __DIR__ . '/../..' . '/app/Repositories/ReportRepository.php',
        'Modules\\Report\\database\\factories\\Report\\ReportFactory' => __DIR__ . '/../..' . '/database/factories/Report/ReportFactory.php',
        'Modules\\Report\\database\\seeders\\ReportDatabaseSeeder' => __DIR__ . '/../..' . '/database/seeders/ReportDatabaseSeeder.php',
        'Modules\\Report\\database\\seeders\\Report\\ReportSeederTableSeeder' => __DIR__ . '/../..' . '/database/seeders/Report/ReportSeederTableSeeder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit246c0d44e173f2bd461da8cf16271aa1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit246c0d44e173f2bd461da8cf16271aa1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit246c0d44e173f2bd461da8cf16271aa1::$classMap;

        }, null, ClassLoader::class);
    }
}
