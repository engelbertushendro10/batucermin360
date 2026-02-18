<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TiketResource\Pages;
use App\Filament\Resources\TiketResource\RelationManagers;
use App\Models\Tiket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\Action;

class TiketResource extends Resource
{
    protected static ?string $model = Tiket::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('pesanan_id')
                    ->relationship('pesanan', 'kode_pesanan')
                    ->required(),
                TextInput::make('kode_tiket')
                    ->required()
                    ->maxLength(255),
                TextInput::make('qr_code')
                    ->maxLength(255)
                    ->default(null),
                Toggle::make('sudah_digunakan')
                    ->required(),
                DateTimePicker::make('waktu_digunakan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pesanan.kode_pesanan')
                    ->label('Kode Pesanan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kode_tiket')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('sudah_digunakan')
                    ->boolean()
                    ->label('Valid?'),
                TextColumn::make('waktu_digunakan')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Action::make('validasi')
                    ->label('Validasi')
                    ->icon('heroicon-o-check-badge')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (Tiket $record) => !$record->sudah_digunakan)
                    ->action(function (Tiket $record) {
                        $record->update([
                            'sudah_digunakan' => true,
                            'waktu_digunakan' => now(),
                        ]);
                    }),
                Action::make('print')
                    ->label('Print')
                    ->icon('heroicon-o-printer')
                    ->url(fn (Tiket $record) => route('tiket.print', $record->kode_tiket))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListTikets::route('/'),
            'create' => Pages\CreateTiket::route('/create'),
            'view' => Pages\ViewTiket::route('/{record}'),
            'edit' => Pages\EditTiket::route('/{record}/edit'),
        ];
    }
}
