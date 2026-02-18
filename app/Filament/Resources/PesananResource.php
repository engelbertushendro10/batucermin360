<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesananResource\Pages;
use App\Filament\Resources\PesananResource\RelationManagers;
use App\Models\Pesanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Actions\Action;

class PesananResource extends Resource
{
    protected static ?string $model = Pesanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->placeholder('Guest'),
                Select::make('acara_id')
                    ->relationship('acara', 'judul')
                    ->required(),
                Select::make('jenis_tamu')
                    ->options([
                        'lokal' => 'Lokal',
                        'mancanegara' => 'Mancanegara',
                    ])
                    ->required(),
                TextInput::make('kode_pesanan')
                    ->disabled()
                    ->dehydrated(false)
                    ->placeholder('Auto-generated'),
                TextInput::make('jumlah_tiket')
                    ->required()
                    ->numeric(),
                TextInput::make('total_harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                TextInput::make('nama_pembeli')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email_pembeli')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('no_hp_pembeli')
                    ->required()
                    ->maxLength(255),
                Select::make('status_pembayaran')
                    ->options([
                        'menunggu' => 'Menunggu',
                        'sudah_bayar' => 'Sudah Bayar',
                        'expired' => 'Expired',
                        'booking' => 'Booking (Bayar di Lokasi)',
                    ])
                    ->required()
                    ->default('menunggu'),
                Select::make('metode_pembayaran')
                    ->options([
                        'online' => 'Online',
                        'lokasi' => 'Di Lokasi',
                    ])
                    ->default('online'),
                DateTimePicker::make('waktu_bayar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Tanggal Order')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('kode_pesanan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('acara.judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nama_pembeli')
                    ->searchable(),
                TextColumn::make('jumlah_tiket')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_harga')
                    ->money('IDR')
                    ->sortable(),
                TextColumn::make('status_pembayaran')
                    ->badge()
                    ->colors([
                        'warning' => 'menunggu',
                        'success' => 'sudah_bayar',
                        'danger' => 'expired',
                        'info' => 'booking',
                    ]),
                TextColumn::make('metode_pembayaran')
                    ->badge(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Action::make('konfirmasiPembayaran')
                    ->label('Konfirmasi')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (Pesanan $record) => $record->status_pembayaran !== 'sudah_bayar')
                    ->action(function (Pesanan $record) {
                        $record->update([
                            'status_pembayaran' => 'sudah_bayar',
                            'waktu_bayar' => now(),
                        ]);

                        // logic to generate tickets would go here
                        for ($i = 0; $i < $record->jumlah_tiket; $i++) {
                            \App\Models\Tiket::create([
                                'pesanan_id' => $record->id,
                                'kode_tiket' => 'TKT-' . strtoupper(uniqid()),
                                'sudah_digunakan' => false,
                            ]);
                        }
                    }),
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
            'index' => Pages\ListPesanans::route('/'),
            'create' => Pages\CreatePesanan::route('/create'),
            'view' => Pages\ViewPesanan::route('/{record}'),
            'edit' => Pages\EditPesanan::route('/{record}/edit'),
        ];
    }
}
