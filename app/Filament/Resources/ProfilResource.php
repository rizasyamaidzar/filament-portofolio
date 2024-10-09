<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Profil;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use PHPUnit\Framework\TestStatus\Risky;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProfilResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfilResource\RelationManagers;
use App\Filament\Resources\SkillResource\RelationManagers\SkillsRelationManager;
use App\Filament\Resources\SosmedResource\RelationManagers\SosmedRelationManager;
use App\Filament\Resources\ProfileResource\RelationManagers\EducationsRelationManager;

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
                        Textarea::make('keterangan')->required(),
                        Textarea::make('deskripsi')->required(),
                        Textarea::make('summary')->required(),
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
            EducationsRelationManager::class,
            SosmedRelationManager::class,
            SkillsRelationManager::class,
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
