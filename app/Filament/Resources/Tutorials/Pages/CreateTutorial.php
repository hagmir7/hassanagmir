<?php

namespace App\Filament\Resources\Tutorials\Pages;

use App\Filament\Resources\Tutorials\TutorialResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class CreateTutorial extends CreateRecord
{
    protected static string $resource = TutorialResource::class;


    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }



    public function getTitle(): string | Htmlable
    {
        if (filled(static::$title)) {
            return new HtmlString(
                '<h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100">'
                    . static::$title
                    . '</h1>'
            );
        }

        return new HtmlString(
            '<h1 class="text-2xl font-bold text-gray-white dark:text-gray-100">'
                . __('filament-panels::resources/pages/create-record.title', [
                    'label' => static::getResource()::getTitleCaseModelLabel(),
                ])
                . '</h1>'
        );
    }
}
