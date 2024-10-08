<?php

namespace App\Filament\Resources\KeteranganResource\Pages;

use App\Filament\Resources\KeteranganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeterangans extends ListRecords
{
    protected static string $resource = KeteranganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
