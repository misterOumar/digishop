<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShopResource\Pages;
use App\Filament\Resources\ShopResource\RelationManagers;
use App\Models\Shop;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShopResource extends Resource
{
    protected static ?string $model = Shop::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationLabel = 'Ma boutique';

    protected static ?string $modelLabel = 'Boutique';

    protected static ?string $navigationGroup = 'Configuration';

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Générale')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('adresse')
                                    ->required()
                                    ->maxLength(255)
                                ->suffixIcon('heroicon-o-map-pin'),
                                Forms\Components\TextInput::make('phone_1')
                                    ->tel()
                                    ->required()
                                ->suffixIcon('heroicon-o-phone'),
                                Forms\Components\TextInput::make('phone_2')
                                    ->tel()
                                ->suffixIcon('heroicon-o-phone'),
                                Forms\Components\Select::make('currency_id')
                                    ->label('Devise')
                                    ->relationship('currency', 'name')
                                    ->preload()
                                    ->searchable()
                                    ->required(),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                ->suffixIcon('heroicon-o-envelope'),
                                Forms\Components\TextInput::make('slogan'),
                                Forms\Components\TextInput::make('map')
                                ->suffixIcon('heroicon-o-map'),
                                Forms\Components\RichEditor::make('description')
                                    ->columnSpanFull(),
                            ])
                           ,
                        Tabs\Tab::make('Charte')
                            ->schema([
                                Forms\Components\Radio::make('logo_type')
                                    ->options([
                                        '0' => 'Texte',
                                        '1' => 'Image',
                                    ])
                                    ->inline()
                                    ->inlineLabel(false)
                                    ->label('Type de logo')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('logo')
                                    ->required(),
                                Forms\Components\FileUpload::make('favicon'),
                                Forms\Components\ColorPicker::make('primary_color')->default('#ff6f61'),
                                Forms\Components\ColorPicker::make('secondary_color')->default('#1c1c1c'),
                            ]),
                        Tabs\Tab::make('Sociaux')
                            ->schema([
                                Forms\Components\TextInput::make('whatsapp')
                                    ->tel()
                                    ->suffixIcon('heroicon-o-phone'),
                                Forms\Components\TextInput::make('tiktok')
                                ->url()
                                ->suffixIcon('heroicon-o-globe-alt'),
                                Forms\Components\TextInput::make('facebook')
                                ->url()
                                ->suffixIcon('heroicon-o-globe-alt'),
                                Forms\Components\TextInput::make('twitter')
                                ->url()
                                ->suffixIcon('heroicon-o-globe-alt'),
                                Forms\Components\TextInput::make('instagram')
                                ->url()
                                ->suffixIcon('heroicon-o-globe-alt'),
                                Forms\Components\TextInput::make('youtube')
                                ->url()
                                ->suffixIcon('heroicon-o-globe-alt'),
                            ]),
                    ])
                    ->columnSpanFull()
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ]),






            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                
                
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
            'index' => Pages\ListShops::route('/'),
            'create' => Pages\CreateShop::route('/create'),
            'edit' => Pages\EditShop::route('/{record}/edit'),
        ];
    }
}
