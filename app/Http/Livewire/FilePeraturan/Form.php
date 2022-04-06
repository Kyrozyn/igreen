<?php

namespace App\Http\Livewire\FilePeraturan;

use App\Models\FilePeraturan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads, LivewireAlert;
    public $name, $file;

    public function render()
    {
        return view('livewire.file-peraturan.form');
    }

    public function submitdata(){
        $peraturan = new FilePeraturan();
        $peraturan->nama_file = $this->name;
        $peraturan->save();
        $peraturan->addMedia($this->file)->toMediaCollection('file');
        $peraturan->save();
        $this->flash('success','Data Berhasil Disimpan');
        $this->redirect('/dashboard/fileperaturan');
    }
}
