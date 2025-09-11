<?php

namespace App\Filament\Resources\Lessons\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LessonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label(__("Lesson name"))
                    ->placeholder(__("Lesson.."))
                    ->required(),
                Select::make('section_id')
                    ->label(__("Section"))
                    ->relationship('section', 'title')
                    ->preload()
                    ->required(),

                RichEditor::make('content')
                    ->label(__('Lesson content'))
                    ->required()
                    ->extraInputAttributes(['style' => 'min-height: 20rem; max-height: 50vh; overflow-y: auto;'])
                    ->columnSpanFull()
            ]);
    }
}
