<?php

namespace App\Http\Livewire\Pelaporan;

use App\Models\Pelaporan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Detail extends Component
{
    use LivewireAlert;
    public Pelaporan $detail;

    public function mount($id)
    {
        $this->detail = Pelaporan::whereId($id)->first();
    }

    public function render()
    {
        return view('livewire.pelaporan.detail');
    }

    public function terima(){
        if($this->detail->status_detail == "Sedang direview oleh Manager" or $this->detail->status_detail == "[Manager] Perlu Perbaikan"){
            $this->detail->status_detail = "Sedang direview oleh KTT";
            $this->detail->status = "Menunggu Konfirmasi";
        }
        elseif($this->detail->status_detail == "Sedang direview oleh KTT" or $this->detail->status_detail == "[KTT] Perlu Perbaikan"){
            $this->detail->status_detail = "Selesai";
            $this->detail->status = "Menunggu Konfirmasi";
        }
        $this->detail->save();
        $this->alert('success','Pelaporan berhasil diterima');
    }

    public function tolak(){
        if($this->detail->status_detail == "Sedang direview oleh Manager" or $this->detail->status_detail == "[Manager] Perlu Perbaikan"){
            $this->detail->status_detail = "[Manager] Perlu Perbaikan";
            $this->detail->status = "Revisi";
            $this->detail->save();
        }
        elseif($this->detail->status_detail == "Sedang direview oleh KTT" or $this->detail->status_detail == "[KTT] Perlu Perbaikan"){
            $this->detail->status_detail = "[KTT] Perlu Perbaikan";
            $this->detail->status = "Revisi";
            $this->detail->save();
        }
        $this->alert('success','Pelaporan berhasil ditolak');
    }
}
