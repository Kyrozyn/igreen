<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    public function historypelaporan()
    {
        $this->hasMany(HistoryPelaporan::class);
    }

    public function laporanuser(){
        $this->hasMany(LaporanUser::class);
    }
}
