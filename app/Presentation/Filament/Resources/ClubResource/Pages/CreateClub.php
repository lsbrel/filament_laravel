<?php

namespace App\Presentation\Filament\Resources\ClubResource\Pages;

use App\Presentation\Filament\Resources\ClubResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateClub extends CreateRecord
{
    protected static string $resource = ClubResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
