<?php

namespace App\Filament\Resources\Tutorials\Pages;

use App\Filament\Resources\Tutorials\TutorialResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditTutorial extends EditRecord
{
    protected static string $resource = TutorialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
