<?php

namespace App\Filament\Resources\DokumentasiProjectResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DokumentasiRelationManager extends RelationManager
{
    protected static string $relationship = 'dokumentasi';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('foto')->disk('public')->directory('project-dokumentasi')->visibility('public')
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('foto')
            ->columns([
                Tables\Columns\ImageColumn::make('foto'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
