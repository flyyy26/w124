<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryArticleResource\Pages;
use App\Models\CategoryArticle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\{TextInput, Grid};

class CategoryArticleResource extends Resource
{
    protected static ?string $model = CategoryArticle::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';
    protected static ?string $navigationLabel = 'Kategori Artikel';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('slug')
                ->disabled()
                ->hidden(),

            Grid::make(1)->schema([
                TextInput::make('name')
                    ->label('Nama Kategori')
                    ->required()
                    ->maxLength(255),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')
                ->label('Nama Kategori')
                ->searchable()
                ->sortable(),

            TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListCategoryArticles::route('/'),
            'create' => Pages\CreateCategoryArticle::route('/create'),
            'edit'   => Pages\EditCategoryArticle::route('/{record}/edit'),
        ];
    }
}