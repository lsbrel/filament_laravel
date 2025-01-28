<?php

namespace App\Presentation\Filament\Resources\FootballPlayerResource\Pages;

use App\Presentation\Filament\Resources\FootballPlayerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFootballPlayer extends EditRecord
{
    protected static string $resource = FootballPlayerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
