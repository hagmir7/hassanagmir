<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            Grid::make()
                ->schema([
                    FileUpload::make('logo')
                        ->image()
                        ->columnSpanFull()
                        ->avatar()
                        ->alignCenter()
                        ->label(false),
                    TextInput::make('name')
                        ->required(),

                    Select::make('language_id')
                        ->relationship('language', 'name')
                        ->native(false)
                        ->required(),


                    Textarea::make('description')
                        ->columnSpanFull(),
                ])->columnSpanFull()
            ])->columns(1);
    }
}
