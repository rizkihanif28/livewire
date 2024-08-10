<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Show extends Component
{
    // #[Title('User')]

    public User $user;

    public function render()
    {
        return view('livewire.users.show')->title($this->user->name);
    }
}
