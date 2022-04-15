<?php

namespace App\Http\Livewire\FilePeraturan;

use App\Models\JenisFilePeraturan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Jenis extends Component
{
    use LivewireAlert;
    public $name;

    public function render()
    {
        return view('livewire.file-peraturan.jenis');
    }

    public function submitdata(){
        $peraturan = new JenisFilePeraturan();
        $peraturan->nama = $this->name;
        $peraturan->save();
        $this->flash('success','Data Berhasil Disimpan');
        $this->redirect('/dashboard/fileperaturan/add');
    }
}
