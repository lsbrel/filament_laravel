<?php

namespace App\Presentation\Filament\Resources\FootballPlayerResource\Pages;

use App\Presentation\Filament\Resources\FootballPlayerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFootballPlayers extends ListRecords
{
    protected static string $resource = FootballPlayerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
