<?php

namespace App\Filament\Resources\PageResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->color('danger')
                ->icon('heroicon-o-trash'),

            CreateAction::make()
                ->color('success')
                ->url('/admin/pages/create')
                ->icon('heroicon-o-plus-circle'),

            Action::make('view')
                ->label(__("Voir"))
                ->color('info')
                ->url(route('page.show', $this->record->slug))
                ->openUrlInNewTab()
                ->icon('heroicon-o-rocket-launch'),
        ];
    }
}
