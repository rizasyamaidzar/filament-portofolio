<?php

namespace App\Filament\Resources\KeteranganResource\Pages;

use App\Filament\Resources\KeteranganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKeterangan extends EditRecord
{
    protected static string $resource = KeteranganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
