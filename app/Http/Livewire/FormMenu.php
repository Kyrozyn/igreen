<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FormMenu extends Component
{
    use LivewireAlert;

    public $idmenu,$name,$frontmenu_id,$idparentmenu;
    public $havesubmenu=0;

    public function mount($origin,$frontmenu_id,$id)
    {
        $this->frontmenu_id = $frontmenu_id;
        if($origin=='frontmenu'){
            $this->idparentmenu = null;
        }
        elseif($origin=='menu'){
            $this->idparentmenu = $id;
        }
    }

    public function render()
    {
        return view('livewire.form-menu');
    }

    public function submitdata(){
        $this->validate([
            'name' => 'required',
            'idmenu' => 'required'
        ]);

        $menu = new Menu();
        $menu->name = $this->name;
        $menu->id_menu = $this->idmenu;
        $menu->front_menu_id = $this->frontmenu_id;
        $menu->parent_menu = $this->idparentmenu;
        $menu->have_submenu = $this->havesubmenu;
        $menu->save();
        $this->reset('idmenu','name','havesubmenu');
        $this->alert('success','Menu berhasil ditambahkan');
    }
}
