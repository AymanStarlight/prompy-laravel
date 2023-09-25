<?php

namespace App\Livewire;

use Livewire\Component;

class PromptCard extends Component
{
    public $prompt;
    public function render()
    {
        return view('livewire.prompt-card');
    }
}
