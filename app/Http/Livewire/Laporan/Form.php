<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Laporan;
use App\Models\Menu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Form extends Component
{
    use LivewireAlert;

    public $menu_id;
    public $name,$satuan,$jenislaporan="image";

    public function mount($menu_id)
    {
        $this->menu_id = $menu_id;
    }

    public function render()
    {
        return view('livewire.laporan.form');
    }

    public function submit(){
        $laporan = new Laporan();
        $laporan->menu_id = $this->menu_id;
        $laporan->name = $this->name;
        $laporan->satuan = $this->satuan;
        $laporan->type = $this->jenislaporan;
        $laporan->save();
        $this->flash('success','Berhasil menambahkan laporan');
        $this->redirect('/dashboard/laporan/'.$this->menu_id);
    }

}

