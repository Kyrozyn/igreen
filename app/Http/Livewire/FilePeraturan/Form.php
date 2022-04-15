<?php

namespace App\Http\Livewire\FilePeraturan;

use App\Models\FilePeraturan;
use App\Models\JenisFilePeraturan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads, LivewireAlert;
    public $name, $file,$jenis, $jenis_input=1;

    //make validation rule
    protected $rules = [
        'name' => 'required|string|max:255',
        'jenis' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->jenis  = JenisFilePeraturan::all();
    }

    public function render()
    {
        return view('livewire.file-peraturan.form');
    }

    public function submitdata(){
        $peraturan = new FilePeraturan();
        $peraturan->nama_file = $this->name;
        $peraturan->jenis_file_peraturan_id = $this->jenis_input;
        $peraturan->save();
        $peraturan->addMedia($this->file)->toMediaCollection('file');
        $peraturan->url = $peraturan->getFirstMediaUrl('file');
        $peraturan->save();
        $this->flash('success','Data Berhasil Disimpan');
        $this->redirect('/dashboard/fileperaturan');
    }
}
