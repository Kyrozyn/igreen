<?php

namespace App\Http\Livewire\FrontMenu;

use App\Models\FrontMenu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Table extends Component
{
    use LivewireAlert;

    public function render()
    {
        $frontmenus = FrontMenu::all();
        return view('livewire.front-menu.table',compact('frontmenus'));
    }

    public function delete($id){
        $frontmenu = FrontMenu::find($id);
        $frontmenu->delete();
        $this->alert('success', 'Front Menu berhasil dihapus');
    }
}
