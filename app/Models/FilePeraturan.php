<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class FilePeraturan extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function jenis(){
        return $this->belongsTo(JenisFilePeraturan::class,'jenis_file_peraturan_id');
    }
}
