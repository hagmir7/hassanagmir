<?php

namespace App\Filament\Resources\Sections\Schemas;

use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tutorial_id')
                    ->label(__("Tutorial"))
                    ->relationship('tutorial', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('title')
                    ->label(__("Section name"))
                    ->required(),
                CodeEditor::make('settings')
                    ->columnSpanFull()
                    ->language(Language::Json),
            ]);
    }
}
