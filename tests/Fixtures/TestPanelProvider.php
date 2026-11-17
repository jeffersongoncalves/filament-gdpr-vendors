<?php

namespace JeffersonGoncalves\Filament\GdprVendors\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\GdprVendors\GdprVendorsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                GdprVendorsPlugin::make(),
            ]);
    }
}
