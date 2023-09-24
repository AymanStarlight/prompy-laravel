<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{

    public $dropDown = false;

    public function toggleDropDown() {
        $this->dropDown = !$this->dropDown;
    }

    public function closeDropDown() {
        $this->dropDown = false;
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
