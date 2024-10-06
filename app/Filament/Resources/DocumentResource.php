<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;
    protected static ?string $navigationIcon = 'ionicon-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Document Name'),
                Forms\Components\FileUpload::make('file_path')
                    ->disk('public')
                    ->directory('documents')
                    ->label('Upload File')
                    ->required(),
                Forms\Components\Select::make('category')
                    ->options([
                        Document::CATEGORY_ACTIVITY => 'Дейността на гимназията',
                        Document::CATEGORY_SERVICES => 'Предоставяни обществени услуги',
                        Document::CATEGORY_BUYER_PROFILE => 'Профил на купувача',
                        Document::CATEGORY_SCHOLARSHIPS => 'Стипендии',
                        Document::CATEGORY_BUDGET => 'Бюджет',
                        Document::CATEGORY_CURRICULA => 'Учебни Планове',
                    ])
                    ->required()
                    ->label('Category'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Document Name'),
                Tables\Columns\TextColumn::make('category')->label('Category'),
                Tables\Columns\TextColumn::make('created_at')->label('Uploaded At')->dateTime(),
            ])
            ->filters([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}