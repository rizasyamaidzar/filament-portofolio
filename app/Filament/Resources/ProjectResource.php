<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumentasiProjectResource\RelationManagers\DokumentasiRelationManager;
use App\Filament\Resources\FiturProjectResource\RelationManagers\FeatursRelationManager;
use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Filament\Resources\RoleProjectResource\RelationManagers\RolesRelationManager;
use App\Filament\Resources\ToolProjectResource\RelationManagers\ToolsRelationManager;
use App\Models\Dokumentasi;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Card::make()
                    ->schema([
                        TextInput::make('nama')->required()->maxLength(255),
                        Textarea::make('keterangan')->required(),
                        FileUpload::make('foto')->disk('public')->directory('project')->visibility('public'),
                        TextInput::make('link_yt')
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('foto'),
                TextColumn::make('nama'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            DokumentasiRelationManager::class,
            FeatursRelationManager::class,
            RolesRelationManager::class,
            ToolsRelationManager::class,


        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
