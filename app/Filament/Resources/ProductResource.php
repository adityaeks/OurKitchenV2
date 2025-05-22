<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Produk')
                    ->image()
                    ->directory('products')
                    ->visibility('public')
                    ->preserveFilenames()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Produk'),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->label('Kategori'),
                Forms\Components\Textarea::make('short_description')
                    ->label('Deskripsi Singkat')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('long_description')
                    ->label('Deskripsi Lengkap')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('weight')
                    ->label('Berat')
                    ->suffix('gram'),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp')
                    ->label('Harga'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori')
                    ->sortable(),
                Tables\Columns\TextColumn::make('weight')
                    ->label('Berat')
                    ->suffix(' gram'),
                Tables\Columns\TextColumn::make('price')
                    ->money('IDR')
                    ->label('Harga')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Dibuat Pada')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
