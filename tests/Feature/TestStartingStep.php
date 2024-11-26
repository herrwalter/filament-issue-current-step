<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Models\User;
use Livewire\Livewire;
use Tests\TestCase;

class TestStartingStep extends TestCase
{

    public function test(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        Livewire::test(CreateUser::class)
        ->assertWizardCurrentStep(2);
    }
}
