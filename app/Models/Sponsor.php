<?php

namespace App\Models;

use App\Constant\GlobalConstant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
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
