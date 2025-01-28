<?php

namespace App\Presentation\Filament\Resources;

use App\Presentation\Filament\Resources\ClubResource\Pages;
use App\Presentation\Filament\Resources\ClubResource\RelationManagers;
use App\Infra\Models\Club;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClubResource extends Resource
{
    protected static ?string $model = Club::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("name"),
                Forms\Components\TextInput::make("foundation_year"),
                Forms\Components\TextInput::make("country")->columnSpanFull(),
                Forms\Components\Repeater::make('footballPlayers')
                    ->relationship('footballPlayers')  // Specify the relationship
                    ->label('Football Players')
                    ->grid(3)
                    ->columnSpan(2)
                    ->schema([
                        Forms\Components\Section::make() // Create a card for each football player
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Player Name'), // Display the name of the player in the card
                                Forms\Components\TextInput::make('position')
                                    ->label('Position'),
                            ]), // You can adjust the column span for the card layout
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("id"),
                Tables\Columns\TextColumn::make("name"),
                Tables\Columns\TextColumn::make("foundation_year"),
                Tables\Columns\TextColumn::make("country"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListClubs::route('/'),
            'create' => Pages\CreateClub::route('/create'),
            'edit' => Pages\EditClub::route('/{record}/edit'),
        ];
    }
}
