<?php

namespace JeffersonGoncalves\Filament\GdprVendors\Resources\Vendors\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\Filament\GdprVendors\Resources\Vendors\VendorResource;

class CreateVendor extends CreateRecord
{
    protected static string $resource = VendorResource::class;
}
