<?php

namespace App\Livewire;

use App\Models\Applicant;
use App\Models\Raffle;
use Livewire\Component;

class RaffleApplication extends Component
{
    public string $email = "";
    public bool $success = false;

    public function save(): void
    {
        Applicant::create([
            'raffle_id' => Raffle::first()->id,
            'email' => $this->email
        ]);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.raffle-application');
    }
}
