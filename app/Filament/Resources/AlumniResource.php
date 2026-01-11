<?php

namespace App\Filament\Resources;

    use App\Filament\Resources\AlumniResource\Pages;
    use App\Models\Alumni;
    use Filament\Forms;
    use Filament\Forms\Form;
    use Filament\Resources\Resource;
    use Filament\Tables;
    use Filament\Tables\Table;

    class AlumniResource extends Resource
    {
        protected static ?string $model = Alumni::class;

        protected static ?string $navigationIcon = 'heroicon-o-briefcase'; // Ikon tas kerja
        protected static ?string $navigationLabel = 'Data Alumni';
        protected static ?string $modelLabel = 'Alumni';
        protected static ?string $pluralModelLabel = 'Data Alumni';

        public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    Forms\Components\TextInput::make('nama')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('npm')
                        ->label('NPM')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->maxLength(255),
                    Forms\Components\TextInput::make('pekerjaan')
                        ->label('Perusahaan')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('jabatan')
                        ->placeholder('Contoh: Software Engineer di Google')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('gambar')
                        ->image()
                        ->directory('foto-alumni')
                        ->imageEditor()
                        ->required()
                        ->columnSpanFull(),
                ]);
        }

        public static function table(Table $table): Table
        {
            return $table
                ->columns([
                    Tables\Columns\ImageColumn::make('gambar')
                        ->circular(),
                    Tables\Columns\TextColumn::make('nama')
                        ->searchable()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('npm')
                        ->label('NPM')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('pekerjaan')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('jabatan')
                        ->searchable(),
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
                'index' => Pages\ListAlumnis::route('/'),
                'create' => Pages\CreateAlumni::route('/create'),
                'edit' => Pages\EditAlumni::route('/{record}/edit'),
            ];
        }
    }
