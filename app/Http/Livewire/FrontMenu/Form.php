<?php

namespace App\Http\Livewire\FrontMenu;

use App\Models\FrontMenu;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $name,$logo;

    public function render()
    {
        return view('livewire.front-menu.form');
    }

    public function submitdata(){
        $frontmenu = new FrontMenu();
        $frontmenu->name = $this->name;
        $frontmenu->save();
        $frontmenu->addMedia($this->logo)->toMediaCollection('logo');
        $frontmenu->icon_url = $frontmenu->getFirstMediaUrl('logo');
        $frontmenu->save();
    }
}