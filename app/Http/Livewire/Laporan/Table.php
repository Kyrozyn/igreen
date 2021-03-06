<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Laporan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Table extends Component
{
    use LivewireAlert;
    public $menu_id;
    public $delete_id;
    protected $listeners = [
        'deleteaction'
    ];

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
        $this->alert('info', 'Apa anda yakin akan menghapus?', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'deleteaction',
            'confirmButtonText' => 'Ya',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
        $this->delete_id = $id;
    }

    public function deleteaction(){
        $laporan = Laporan::find($this->delete_id);
        $laporan->delete();
        $this->alert('success', 'Laporan berhasil dihapus');
        $this->delete_id = "";
        $this->alert('success', 'Data berhasil dihapus!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}
