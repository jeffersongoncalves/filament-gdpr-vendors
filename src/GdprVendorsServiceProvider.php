<?php

namespace JeffersonGoncalves\Filament\GdprVendors;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GdprVendorsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-gdpr-vendors')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
