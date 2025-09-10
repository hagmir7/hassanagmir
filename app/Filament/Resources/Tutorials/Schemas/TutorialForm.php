<?php

namespace App\Filament\Resources\Tutorials\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class TutorialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Section::make()
                ->schema([
                    TextInput::make('title')
                        ->label(__('Title'))
                        ->required()
                        ->maxLength(255)
                        ->helperText(__('Enter a descriptive title for your tutorial'))
                        ->columnSpan(2),


                    TagsInput::make('meta_keywords')
                        ->label(__('SEO Keywords'))
                        ->placeholder(__('Add keywords'))
                        ->separator(',')
                        ->helperText(__('Add relevant keywords for SEO (separate with commas)'))
                        ->columnSpan([
                            'default' => 1,
                            'md' => 2,
                        ]),
                    Textarea::make('description')
                        ->label(__('SEO Description'))
                        ->maxLength(160)
                        ->rows(3)
                        ->helperText(__('This will be used as the meta description for search engines (max 160 characters)'))
                        ->columnSpan([
                            'default' => 1,
                            'md' => 2,
                        ]),
                ])->columnSpan(2),

            Section::make()
                ->schema([
                    FileUpload::make('thumbnail')
                        ->label(__('Thumbnail'))
                        ->image()
                        ->maxSize(5120)
                        ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                        ->directory('tutorials/thumbnails')
                        ->helperText(__('Upload a thumbnail image (max 5MB)')),

                    Select::make('category_id')
                        ->label(__('Category'))
                        ->searchable()
                        ->relationship('category', 'name')
                        ->required()
                        ->createOptionForm([
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
                                ])->columns(2)
                        ])
                        ->helperText(__('Select or create a category for this tutorial')),

                    Toggle::make('is_published')
                        ->label(__('Published'))
                        ->helperText(__('Toggle to publish or unpublish this tutorial'))
                        ->default(false),

                ])->columnSpan(1),

            RichEditor::make('intro')
                ->label(__('Introduction'))
                ->required()
                ->extraInputAttributes(['style' => 'min-height: 20rem; max-height: 50vh; overflow-y: auto;'])
                ->columnSpanFull()
        ])->columns(3);
    }
}
