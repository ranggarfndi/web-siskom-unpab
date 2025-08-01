<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenTetapResource\Pages;
use App\Models\DosenTetap;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DosenTetapResource extends Resource
{
    protected static ?string $model = DosenTetap::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Dosen Tetap';
    protected static ?string $modelLabel = 'Data Dosen';
    protected static ?string $pluralModelLabel = 'Dosen Tetap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nidn')
                    ->required()
                    ->unique(ignoreRecord: true) // NIDN harus unik, kecuali untuk record yg sedang diedit
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_hp')
                    ->label('No. HP')->tel()
                    ->maxLength(20),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\FileUpload::make('foto')
                    ->required()
                    ->image()
                    ->directory('foto-dosen') // Simpan di folder terpisah
                    ->imageEditor(),
                Forms\Components\Textarea::make('bidang_keahlian')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')->circular(),
                Tables\Columns\TextColumn::make('nama')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('nidn')->searchable(),
                Tables\Columns\TextColumn::make('no_hp')->searchable(),
                Tables\Columns\TextColumn::make('urutan')->sortable(),
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
            ])
            ->defaultSort('urutan', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDosenTetaps::route('/'),
            'create' => Pages\CreateDosenTetap::route('/create'),
            'edit' => Pages\EditDosenTetap::route('/{record}/edit'),
        ];
    }
}