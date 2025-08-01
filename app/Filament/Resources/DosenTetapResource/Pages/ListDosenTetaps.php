<?php

namespace App\Filament\Resources\DosenTetapResource\Pages;

use App\Filament\Resources\DosenTetapResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDosenTetaps extends ListRecords
{
    protected static string $resource = DosenTetapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
