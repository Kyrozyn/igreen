<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Laporan;
use App\Models\Menu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Form extends Component
{
    use LivewireAlert;

    public $parent="Menu",$jenislaporan="image",$child=0;
    public $parentmenu,$parentlaporan;
    public $idlaporan,$namalaporan;

    public function render()
    {
        $menus = Menu::all();
        $laporans = Laporan::whereHaveChild(1)->get();
        return view('livewire.laporan.form',compact('menus','laporans'));
    }

    public function submit(){

        if($this->parent=="Menu"){
            $this->validate([
                'idlaporan' => 'required',
                'namalaporan' => 'required',
                'parentmenu' => 'required'
            ]);
        }
        if($this->parent=="Laporan"){
            $this->validate([
                'idlaporan' => 'required',
                'namalaporan' => 'required',
                'parentlaporan' => 'required'
            ]);
        }
        $laporan = new Laporan();
        $laporan->id_laporan = $this->idlaporan;
        $laporan->name = $this->namalaporan;
        if($this->parent=="Menu"){
            $laporan->menu_id = $this->parentmenu;
        }
        if($this->parent=="Laporan"){
            $laporan->parent_laporan = $this->parentlaporan;
        }
        $laporan->type = $this->jenislaporan;
        $laporan->have_child = $this->child;
        $laporan->save();

        $this->alert('success', 'Berhasil Menambahkan Laporan');
        $this->reset();
    }
}
