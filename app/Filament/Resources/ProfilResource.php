<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Profil;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProfilResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfilResource\RelationManagers;
use PHPUnit\Framework\TestStatus\Risky;

class ProfilResource extends Resource
{
    protected static ?string $model = Profil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Card::make()
                    ->schema([
                        TextInput::make('nama')->required(),
                        TextInput::make('keterangan')->required(),
                        TextInput::make('deskripsi')->required(),
                        TextInput::make('summary')->required(),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama'),
                TextColumn::make('keterangan'),
                TextColumn::make('deskripsi'),
                TextColumn::make('summary'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->authorize(true),
                Tables\Actions\EditAction::make()->authorize(true),
                Tables\Actions\DeleteAction::make()->authorize(true),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfils::route('/'),
            'create' => Pages\CreateProfil::route('/create'),
            'edit' => Pages\EditProfil::route('/{record}/edit'),
        ];
    }
}
