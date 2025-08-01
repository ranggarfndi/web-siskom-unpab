<?php

namespace App\Filament\Resources\DosenTetapResource\Pages;

use App\Filament\Resources\DosenTetapResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDosenTetap extends EditRecord
{
    protected static string $resource = DosenTetapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
