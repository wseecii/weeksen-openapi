<?php

namespace Eecii\WeeksenOpenapi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Eecii\WeeksenOpenapi\Commands\WeeksenOpenapiCommand;

class WeeksenOpenapiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('weeksen-openapi')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('wsn')
            ->hasMigration('create_weeksen_openapi_table')
            ->hasCommand(WeeksenOpenapiCommand::class);
    }
}
