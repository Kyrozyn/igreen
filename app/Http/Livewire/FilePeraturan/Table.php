<?php

namespace App\Http\Livewire\FilePeraturan;

use App\Models\FilePeraturan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Table extends Component
{
    use LivewireAlert;
    public $delete_id;
    protected $listeners = [
        'deleteaction'
    ];

    public function render()
    {
        $fileperaturan = FilePeraturan::all();
        return view('livewire.file-peraturan.table',compact("fileperaturan"));
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
        $fileperaturan = FilePeraturan::find($this->delete_id);
        $fileperaturan->delete();
        $this->alert('success', 'File Peraturan berhasil dihapus');
        $this->delete_id = "";
        $this->alert('success', 'Data berhasil dihapus!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}
