<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
    
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
    public function getTitle(): string
    {
        return 'Buat Artikel Baru';
    }
}