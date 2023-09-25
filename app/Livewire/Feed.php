<?php

namespace App\Livewire;

use App\Models\Prompt;
use Livewire\Component;

class Feed extends Component
{
    public $prompts;

    public function mount() {
        $this->prompts = Prompt::all();
    }

    public function render()
    {
        return view('livewire.feed');
    }
}
