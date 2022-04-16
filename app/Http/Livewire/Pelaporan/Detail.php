<?php

namespace App\Http\Livewire\Pelaporan;

use App\Models\Pelaporan;
use Livewire\Component;

class Detail extends Component
{
    public $detail;

    public function mount($id)
    {
        $this->detail = Pelaporan::whereId($id)->first();
    }

    public function render()
    {
        return view('livewire.pelaporan.detail');
    }
}
