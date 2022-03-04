<?php

namespace App\Http\Livewire;

use App\Models\Laporan;
use App\Models\Menu;
use Illuminate\Support\Facades\Request;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TableMenu extends Component
{
    use LivewireAlert;
    public $menus,$idorigin,$origin,$frontmenuid;

    public function mount($origin,$id)
    {
        $this->idorigin = $id;
        $this->origin = $origin;
    }

    public function render()
    {
        if($this->origin=='frontmenu'){
            $this->menus = Menu::whereFrontMenuId($this->idorigin)->where('parent_menu',null)->get();
            $this->frontmenuid = $this->idorigin;
        }
        elseif($this->origin=='menu'){
            $this->menus = Menu::whereParentMenu($this->idorigin)->get();
            $this->frontmenuid = Menu::whereId($this->idorigin)->first()->front_menu_id;
        }
        return view('livewire.table-menu');
    }

    public function delete($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        $this->alert('success','Berhasil Menghapus Menu');
    }
}
