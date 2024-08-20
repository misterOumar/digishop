<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProduitResource\Pages;
use App\Filament\Resources\ProduitResource\RelationManagers;
use App\Models\Produit;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProduitResource extends Resource
{
    protected static ?string $model = Produit::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?int $navigationSort = 1;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Forms\Components\Section::make('Générale')
                            ->description('Les informations générales du produit')
                            ->schema([
                                Forms\Components\TextInput::make('nom')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\RichEditor::make('description')
                                    ->required()
                                    ->columnSpanFull(),

                            ]),

                        Forms\Components\Section::make('Images')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->directory('products')
                                    ->label('Image principale'),
                                Forms\Components\FileUpload::make('photos')
                                    ->image()
                                    ->multiple()
                                    ->directory('products')
                                    ->label('Images additionnelles'),

                            ]),
                    ])->columnSpan(2),

                Group::make()
                    ->schema([
                        Forms\Components\Section::make('Prix et Stock')
                            ->description('Les informations générales du produit')
                            ->schema([

                                Forms\Components\TextInput::make('prix')
                                    ->required()
                                    ->numeric(),

                                Forms\Components\TextInput::make('stock')
                                    ->required()
                                    ->numeric()
                                    ->minValue(1)
                                    ->label('Quantité Stock Disponible'),

                                Forms\Components\TextInput::make('min_quantite')
                                    ->required()
                                    ->numeric()
                                    ->minValue(1)
                                    ->default(1)
                                    ->label('Quantité Min Vendable'),

                            ]),

                        Forms\Components\Section::make('Associations')
                            ->schema([

                                Forms\Components\Select::make('categorie_id')
                                    ->relationship(name: 'categorie', titleAttribute: 'nom')
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->placeholder('Selectionner une Categorie'),

                                Forms\Components\Select::make('brand_id')
                                    ->relationship(name: 'brand', titleAttribute: 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->label('Marque')
                                    ->placeholder('Selectionner une Marque'),

                                Forms\Components\Select::make('tailles')
                                    ->multiple()
                                    ->placeholder('Selectionner les Tailles')
                                    ->options([
                                        'S' => 'S',
                                        'M' => 'M',
                                        'L' => 'L',
                                        'XL' => 'XL',
                                        'XXL' => 'XXL',
                                        'XXXL' => 'XXXL',
                                    ]),


                                Forms\Components\ColorPicker::make('couleurs'),

                            ]),

                        Forms\Components\Section::make('Statut')
                            ->schema([

                                Forms\Components\Toggle::make('is_active')->label('Actif')->default(true),
                                Forms\Components\Toggle::make('is_new')->label('Nouveau')->default(true),
                                Forms\Components\Toggle::make('in_stock')->label('En stock')->default(true),
                                Forms\Components\Toggle::make('is_solde')->label('En solde')->default(false),
                                Forms\Components\Toggle::make('is_featured')->label('En vedette')->default(false),





                            ]),

                    ]),







            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('prix')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('stock')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('categorie.nom')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tailles')
                    ->searchable(),
                Tables\Columns\ColorColumn::make('couleurs')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListProduits::route('/'),
            'create' => Pages\CreateProduit::route('/create'),
            'view' => Pages\ViewProduit::route('/{record}'),
            'edit' => Pages\EditProduit::route('/{record}/edit'),
        ];
    }
}
