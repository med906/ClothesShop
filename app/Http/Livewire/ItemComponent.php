<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ItemComponent extends Component
{
    public function render()
    {
        return view('livewire.item-component')->layout('layouts.base');
    }
}
