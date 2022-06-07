<?php

namespace App\Http\Livewire\FrontMenu;

use App\Models\FrontMenu;
use http\QueryString;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads, LivewireAlert;
    public $name,$logo;
    public $id_edit;
    protected $queryString = ['id_edit'];

    public function render()
    {
        if($this->id_edit){
            $this->edit($this->id_edit);
        }
        return view('livewire.front-menu.form');
    }

    public function submitdata(){
        if($this->id_edit){
            $frontmenu = FrontMenu::find($this->id_edit);
        }
        else{
            $frontmenu = new FrontMenu();

        }
        $frontmenu->name = $this->name;
        $frontmenu->save();
        $frontmenu->clearMediaCollection('logo');
        $frontmenu->addMedia($this->logo)->toMediaCollection('logo');
        $frontmenu->icon_url = $frontmenu->getFirstMediaUrl('logo');
        $frontmenu->save();
        $this->flash('success','Data Berhasil Disimpan');
        $this->redirect('/dashboard/frontmenu');
    }

    public function edit($id){
        $this->id_edit = $id;
        $frontmenu = FrontMenu::whereId($id)->first();
        $this->name = $frontmenu->name;
//        $this->logo = $frontmenu->icon_url;
    }
}
