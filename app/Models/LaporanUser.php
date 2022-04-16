<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class LaporanUser extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function pelaporan()
    {
        return $this->belongsTo(Pelaporan::class);
    }

    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }
}
