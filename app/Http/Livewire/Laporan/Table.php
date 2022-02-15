<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Laporan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Table extends Component
{
    use LivewireAlert;

    public function render()
    {
        $laporans = Laporan::all();
        return view('livewire.laporan.table',compact('laporans'));
    }

    public function delete($id){
        $laporan = Laporan::find($id);
        $laporan->delete();
        $this->alert('success', 'Laporan berhasil dihapus');
    }
}
