<?php

namespace App\Filament\Resources\FasilitasUniversitasResource\Pages;

use App\Filament\Resources\FasilitasUniversitasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFasilitasUniversitas extends ListRecords
{
    protected static string $resource = FasilitasUniversitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
