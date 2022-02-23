<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class LaporanUser extends Model
{
    use HasFactory, InteractsWithMedia;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
