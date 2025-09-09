<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Components\{
    TextInput,
    Textarea,
    RichEditor,
    DatePicker,
    Select,
    Checkbox,
    FileUpload,
    Grid
};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\{
    TextColumn,
    ImageColumn
};

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Artikel';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('slug')
                ->disabled()
                ->hidden(),

            Grid::make(1)->schema([
                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('articles')
                    ->disk('public')
                    ->visibility('public')
                    ->required(),
            ]),

            Grid::make(2)->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                TextInput::make('author')
                    ->label('Penulis')
                    ->required()
                    ->maxLength(100),
            ]),

            Grid::make(1)->schema([
                Textarea::make('short_description')
                    ->label('Deskripsi Singkat')
                    ->maxLength(500),

                RichEditor::make('content')
                    ->label('Konten')
                    ->required(),
            ]),

            Grid::make(2)->schema([
                DatePicker::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->required(),

                Select::make('category_article_id')
                    ->label('Kategori')
                    ->relationship('categoryArticle', 'name')
                    ->required(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('image')
                ->label('Gambar')
                ->disk('public')
                ->circular()
                ->size(90),

            TextColumn::make('title')
                ->label('Judul')
                ->searchable()
                ->sortable(),

            TextColumn::make('author')
                ->label('Penulis'),

            TextColumn::make('categoryArticle.name')
                ->label('Kategori'),

            TextColumn::make('published_at')
                ->label('Tanggal Publikasi')
                ->date(),

            TextColumn::make('views')
                ->label('Dilihat')
                ->sortable(),
        ])
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
            'index'  => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit'   => Pages\EditArticle::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): string
    {
        return 'Artikel';
    }

    public static function getModelLabel(): string
    {
        return 'Artikel';
    }
}