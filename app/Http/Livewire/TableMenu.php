<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TableMenu extends Component
{
    use LivewireAlert;


    public function render()
    {
        $menus = Menu::all();
        return view('livewire.table-menu',compact('menus'));
    }

    public function delete($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        $this->alert('success', 'Menu berhasil dihapus');
    }
}
