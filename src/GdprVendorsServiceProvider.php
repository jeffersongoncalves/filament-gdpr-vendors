<?php

namespace JeffersonGoncalves\Filament\GdprVendors;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class GdprVendorsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-gdpr-vendors';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
