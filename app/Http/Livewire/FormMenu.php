<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FormMenu extends Component
{
    use LivewireAlert;

    public $nama, $idmenu;

    public function render()
    {
        return view('livewire.form-menu');
    }

    public function submit(){
        $this->validate([
            'nama' => 'required',
            'idmenu' => 'required'
        ]);

        $menu = new Menu();
        $menu->name = $this->nama;
        $menu->id_menu = $this->idmenu;
        $menu->save();
        $this->alert('success', 'Berhasil Menambahkan Menu');
        $this->reset();
    }
}
