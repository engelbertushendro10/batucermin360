<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcaraResource\Pages;
use App\Filament\Resources\AcaraResource\RelationManagers;
use App\Models\Acara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Str;

class AcaraResource extends Resource
{
    protected static ?string $model = Acara::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form
        ->schema([

            TextInput::make('judul')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', Str::slug($state))
                ),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Textarea::make('deskripsi')
                ->required()
                ->columnSpanFull(),

            TextInput::make('lokasi')
                ->required(),

            DateTimePicker::make('tanggal_acara')
                ->required(),

            TextInput::make('harga_lokal')
                ->numeric()
                ->prefix('Rp')
                ->default(20000)
                ->required(),

            TextInput::make('harga_mancanegara')
                ->numeric()
                ->prefix('Rp')
                ->default(50000)
                ->required(),

            TextInput::make('kuota')
                ->numeric()
                ->required(),

            FileUpload::make('banner')
                ->image()
                ->directory('acara')
                ->disk('public'),

            Select::make('status')
                ->options([
                    'draft' => 'Draft',
                    'publish' => 'Publish',
                    'selesai' => 'Selesai',
                ])
                ->default('draft')
                ->required(),

        ])
        ->columns(2);
}

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            ImageColumn::make('banner')
                ->disk('public')
                ->square(),

            TextColumn::make('judul')
                ->searchable()
                ->sortable(),

            TextColumn::make('tanggal_acara')
                ->dateTime()
                ->sortable(),

            TextColumn::make('harga_lokal')
                ->money('IDR')
                ->label('Harga Lokal'),

            TextColumn::make('kuota'),

            TextColumn::make('status')
                ->badge()
                ->colors([
                    'gray' => 'draft',
                    'success' => 'publish',
                    'danger' => 'selesai',
                ]),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAcaras::route('/'),
            'create' => Pages\CreateAcara::route('/create'),
            'edit' => Pages\EditAcara::route('/{record}/edit'),
        ];
    }
}
