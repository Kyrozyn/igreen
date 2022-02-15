<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Livewire\Component;

class TableMenu extends Component
{
    public $nama, $idmenu;

    public function render()
    {
        return view('livewire.table-menu');
    }
}
