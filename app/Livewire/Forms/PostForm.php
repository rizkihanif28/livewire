<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    function store(): void
    {
        $user = User::find(1);

        $user->posts()->create(
            $this->validate()
        );

        flash('Post created successfully', 'success');
        // session()->flash('message', 'Post created successfully');
        $this->reset();
    }
}
