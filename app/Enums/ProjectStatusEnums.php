<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ProjectStatusEnums: int implements HasLabel, HasColor
{
    case PENDING = 1;
    case IN_PROGRESS = 2;
    case COMPLETED = 3;



    public function getLabel(): ?string
    {
        return match ($this) {
            self::PENDING => "Pending",
            self::IN_PROGRESS => "In progress",
            self::COMPLETED => "Completed",
        };
    }


    public static function toArray()
    {
        return [
            1 => "Pending",
            2 => "In progress",
            3 => "Completed",
        ];
    }


    public function getColor(): string | array | null
    {
        return match ($this) {
            self::PENDING => 'warning',
            self::IN_PROGRESS => 'info',
            self::COMPLETED => 'success',
        };
    }
}
