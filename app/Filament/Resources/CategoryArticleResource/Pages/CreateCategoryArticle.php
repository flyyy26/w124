<?php

namespace App\Filament\Resources\CategoryArticleResource\Pages;

use App\Filament\Resources\CategoryArticleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoryArticle extends CreateRecord
{
    protected static string $resource = CategoryArticleResource::class;
    
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}