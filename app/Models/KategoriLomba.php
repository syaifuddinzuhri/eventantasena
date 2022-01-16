<?php

namespace App\Models;

use App\Constant\GlobalConstant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\URL;

class KategoriLomba extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'judul_singkat',
        'judul_panjang',
        'deskripsi',
        'tema',
        'link_instagram',
        'link_registrasi',
        'link_berkas',
        'logo',
        'nama_maskot',
        'maskot',
        'deskripsi_maskot'
    ];

    public function setLogoAttribute($value)
    {
        if($value != null){
            $this->attributes['logo'] = GlobalConstant::IMAGE . $value;
        }
    }

    public function getLogoAttribute()
    {
        return $this->attributes['logo'] ?  URL::to('/') . '/' . $this->attributes['logo'] : null;
    }

    public function setMaskotAttribute($value)
    {
        if($value != null){
            $this->attributes['maskot'] = GlobalConstant::IMAGE . $value;
        }
    }

    public function getMaskotAttribute()
    {
        return $this->attributes['maskot'] ?  URL::to('/') . '/' . $this->attributes['maskot'] : null;
    }

    /**
     * Get all of the cabangs for the KategoriLomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cabangs(): HasMany
    {
        return $this->hasMany(CabangLomba::class);
    }
}
