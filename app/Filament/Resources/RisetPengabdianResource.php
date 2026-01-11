<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RisetPengabdianResource\Pages;
use App\Models\RisetPengabdian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RisetPengabdianResource extends Resource
{
    protected static ?string $model = RisetPengabdian::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Riset & Pengabdian';
    protected static ?string $modelLabel = 'Data Riset/Pengabdian';
    protected static ?string $pluralModelLabel = 'Riset & Pengabdian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('jenis')
                    ->options([
                        'riset' => 'Penelitian (Riset)',
                        'pengabdian' => 'Pengabdian Masyarakat',
                    ])
                    ->required()
                    ->native(false),
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Peneliti/Pelaksana')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('judul')
                    ->label('Judul Kegiatan')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('link')
                    ->label('Link Publikasi/Dokumen')
                    ->url()
                    ->prefix('https://')
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'riset' => 'info',
                        'pengabdian' => 'success',
                    })
                    ->formatStateUsing(fn (string $state): string => ucfirst($state))
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('jenis')
                    ->options([
                        'riset' => 'Riset',
                        'pengabdian' => 'Pengabdian',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListRisetPengabdians::route('/'),
            'create' => Pages\CreateRisetPengabdian::route('/create'),
            'edit' => Pages\EditRisetPengabdian::route('/{record}/edit'),
        ];
    }
}
