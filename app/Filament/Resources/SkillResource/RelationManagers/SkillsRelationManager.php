<?php

namespace App\Filament\Resources\SkillResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;


class SkillsRelationManager extends RelationManager
{
    protected static string $relationship = 'skills';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->required(),
                FileUpload::make('logo')->disk('public')->directory('skill')->visibility('public'),
                TextInput::make('link'),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nama')
            ->columns([
<<<<<<< HEAD
                Tables\Columns\ImageColumn::make('logo')->url(fn ($record) => secure_asset($record->logo))->size(70)->circular(),
=======
                Tables\Columns\ImageColumn::make('logo')->label('Logo')->url(fn($record) => asset($record->logo))->size(70)->circular(),
>>>>>>> ecb4d7704ba0b3038917303b51266153f3248da1
                Tables\Columns\TextColumn::make('nama'),
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
