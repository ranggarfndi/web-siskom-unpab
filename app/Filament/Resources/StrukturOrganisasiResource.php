<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StrukturOrganisasiResource\Pages;
use App\Models\StrukturOrganisasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StrukturOrganisasiResource extends Resource
{
    protected static ?string $model = StrukturOrganisasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group'; // Ikon di navigasi
    protected static ?string $navigationLabel = 'Struktur Organisasi'; // Nama di navigasi
    protected static ?string $modelLabel = 'Anggota Organisasi'; // Nama untuk data tunggal
    protected static ?string $pluralModelLabel = 'Struktur Organisasi'; // Nama untuk data jamak

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nidn')
                    ->label('NIDN') // Label yang lebih jelas
                    ->maxLength(255),
                Forms\Components\FileUpload::make('foto')
                    ->required()
                    ->image() // Hanya menerima file gambar
                    ->directory('foto-organisasi') // Simpan di folder public/storage/foto-organisasi
                    ->imageEditor(), // Aktifkan editor gambar sederhana (crop, rotate)
                Forms\Components\RichEditor::make('deskripsi')
                    ->columnSpanFull(), // Buat field ini memakan lebar penuh
                Forms\Components\TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->helperText('Digunakan untuk mengurutkan tampilan. Angka lebih kecil akan tampil lebih dulu.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->circular(), // Tampilkan gambar dalam bentuk lingkaran
                Tables\Columns\TextColumn::make('nama')
                    ->searchable() // Aktifkan pencarian untuk kolom ini
                    ->sortable(), // Aktifkan pengurutan untuk kolom ini
                Tables\Columns\TextColumn::make('nidn')
                    ->label('NIDN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('urutan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan default, bisa dimunculkan
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ->defaultSort('urutan', 'asc'); // Urutkan berdasarkan kolom 'urutan' dari kecil ke besar
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStrukturOrganisasis::route('/'),
            'create' => Pages\CreateStrukturOrganisasi::route('/create'),
            'edit' => Pages\EditStrukturOrganisasi::route('/{record}/edit'),
        ];
    }
}