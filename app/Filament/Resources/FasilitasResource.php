<?php

    namespace App\Filament\Resources;

    use App\Filament\Resources\FasilitasResource\Pages;
    use App\Models\Fasilitas;
    use Filament\Forms;
    use Filament\Forms\Form;
    use Filament\Resources\Resource;
    use Filament\Tables;
    use Filament\Tables\Table;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\SoftDeletingScope;

    class FasilitasResource extends Resource
    {
        protected static ?string $model = Fasilitas::class;

        protected static ?string $navigationIcon = 'heroicon-o-photo';
        protected static ?string $navigationLabel = 'Galeri Fasilitas';
        protected static ?string $modelLabel = 'Fasilitas';
        protected static ?string $pluralModelLabel = 'Galeri Fasilitas';


        public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    Forms\Components\TextInput::make('nama')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),
                    Forms\Components\FileUpload::make('gambar')
                        ->required()
                        ->image()
                        ->directory('foto-fasilitas') // Gambar akan disimpan di storage/app/public/foto-fasilitas
                        ->imageEditor()
                        ->columnSpanFull(),
                    Forms\Components\RichEditor::make('deskripsi')
                        ->columnSpanFull(),
                ]);
        }

        public static function table(Table $table): Table
        {
            return $table
                ->columns([
                    Tables\Columns\ImageColumn::make('gambar')
                        ->width(100)
                        ->height(100)
                        ->square(),
                    Tables\Columns\TextColumn::make('nama')
                        ->searchable()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('deskripsi')
                        ->limit(50)
                        ->html(),
                    Tables\Columns\TextColumn::make('created_at')
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
                ->defaultSort('created_at', 'desc'); // Mengurutkan berdasarkan data terbaru
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
                'index' => Pages\ListFasilitas::route('/'),
                'create' => Pages\CreateFasilitas::route('/create'),
                'edit' => Pages\EditFasilitas::route('/{record}/edit'),
            ];
        }    
    }
    