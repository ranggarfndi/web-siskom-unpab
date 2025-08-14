<?php

namespace App\Filament\Resources\FasilitasUniversitasResource\Pages;

use App\Filament\Resources\FasilitasUniversitasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFasilitasUniversitas extends EditRecord
{
    protected static string $resource = FasilitasUniversitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
