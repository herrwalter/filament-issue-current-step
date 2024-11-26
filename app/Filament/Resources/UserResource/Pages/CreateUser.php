<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Wizard::make([
                Wizard\Step::make('step 1')
                    ->schema([
                        TextInput::make('name'),
                    ]),
                Wizard\Step::make('step 2')
                    ->schema([
                        TextInput::make('email'),
                    ]),
                Wizard\Step::make('step 3')
                    ->schema([
                        TextInput::make('password'),
                    ]),
            ])->startOnStep(2)
        ]);
    }
}
