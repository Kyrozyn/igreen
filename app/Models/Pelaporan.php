<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Pelaporan extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function historypelaporan()
    {
        return $this->hasMany(HistoryPelaporan::class);
    }

    public function laporanuser()
    {
        return $this->hasMany(LaporanUser::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
