<?php

namespace App\Filament\Resources\Languages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LanguageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__("Language"))
                    ->required(),
                TextInput::make('code')
                    ->label(__("Code"))
                    ->required(),
            ]);
    }
}
