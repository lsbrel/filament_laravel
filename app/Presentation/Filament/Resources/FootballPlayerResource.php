<?php

namespace App\Presentation\Filament\Resources;

use App\Presentation\Filament\Resources\FootballPlayerResource\Pages;
use App\Presentation\Filament\Resources\FootballPlayerResource\RelationManagers;
use App\Infra\Models\FootballPlayer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FootballPlayerResource extends Resource
{
    protected static ?string $model = FootballPlayer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("name")->required(),
                Forms\Components\TextInput::make("position")->required(),
                Forms\Components\Select::make("club_id")->label("Clube")->relationship("club", "name")->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("id"),
                Tables\Columns\TextColumn::make("name"),
                Tables\Columns\TextColumn::make("position"),
                Tables\Columns\TextColumn::make("club.name")->badge(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFootballPlayers::route('/'),
            'create' => Pages\CreateFootballPlayer::route('/create'),
            'edit' => Pages\EditFootballPlayer::route('/{record}/edit'),
        ];
    }
}
