<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Pelaporan extends Model implements HasMedia
{
    use HasFactory,  InteractsWithMedia;

    public function historypelaporan()
    {
        $this->hasMany(HistoryPelaporan::class);
    }

    public function laporanuser(){
        $this->hasMany(LaporanUser::class);
    }
}
