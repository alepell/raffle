<?php

namespace App\Livewire;

use Livewire\Component;

class RaffleApplication extends Component
{
    public string $email = "";
    public bool $success = false;

    public function save(): void
    {
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.raffle-application');
    }
}
