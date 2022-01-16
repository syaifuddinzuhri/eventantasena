<?php

namespace App\Models;

use App\Constant\GlobalConstant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class CabangLomba extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_lomba_id',
        'judul',
        'deskripsi',
        'gambar',
    ];

    public function setGambarAttribute($value)
    {
        if($value != null){
            $this->attributes['gambar'] = GlobalConstant::IMAGE . $value;
        }
    }

    public function getGambarAttribute()
    {
        return $this->attributes['gambar'] ?  URL::to('/') . '/' . $this->attributes['gambar'] : null;
    }

}
