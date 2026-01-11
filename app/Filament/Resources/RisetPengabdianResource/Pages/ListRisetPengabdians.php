<?php

namespace App\Filament\Resources\RisetPengabdianResource\Pages;

use App\Filament\Resources\RisetPengabdianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRisetPengabdians extends ListRecords
{
    protected static string $resource = RisetPengabdianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
