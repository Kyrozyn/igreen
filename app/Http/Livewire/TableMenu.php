<?php

namespace App\Http\Livewire;

use App\Models\Laporan;
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
        $laporan = Laporan::whereIdLaporan($menu->id_laporan)->get();
        if($laporan->count() > 0) {
            $this->alert('danger', 'Menu tidak bisa dihapus karena sudah ada laporan yang menggunakan menu ini');
        } else {
            $menu->delete();
            $this->alert('success', 'Menu berhasil dihapus');
        }
    }
}
