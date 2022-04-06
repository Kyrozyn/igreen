<?php

namespace App\Http\Livewire\FrontMenu;

use App\Models\FrontMenu;
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
        $frontmenus = FrontMenu::all();
        return view('livewire.front-menu.table',compact('frontmenus'));
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
        $frontmenu = FrontMenu::find($this->delete_id);
        $frontmenu->delete();
        $this->alert('success', 'Front Menu berhasil dihapus');
        $this->delete_id = "";
        $this->alert('success', 'Data berhasil dihapus!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}
