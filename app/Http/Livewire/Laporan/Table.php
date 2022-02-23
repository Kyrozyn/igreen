<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Laporan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Table extends Component
{
    use LivewireAlert;
    public $menu_id;

    public function mount($menu_id)
    {
        $this->menu_id = $menu_id;
    }

    public function render()
    {
        $laporans = Laporan::whereMenuId($this->menu_id)->get();
        return view('livewire.laporan.table',compact('laporans'));
    }

    public function delete($id){
        $laporan = Laporan::find($id);
        $laporan->delete();
        $this->alert('success', 'Laporan berhasil dihapus');
    }
}
