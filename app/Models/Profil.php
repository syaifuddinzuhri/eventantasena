<?php

namespace App\Models;

use App\Constant\GlobalConstant;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Profil extends Model
{
    use HasFactory;

     protected $fillable = [
        'judul',
        'tema',
        'deskripsi',
        'deskripsi_footer',
        'logo',
        'logo_web',
        'logo_favicon',
        'start',
        'end',
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

    public function setLogoWebAttribute($value)
    {
        if($value != null){
            $this->attributes['logo_web'] = GlobalConstant::IMAGE . $value;
        }
    }

    public function getLogoWebAttribute()
    {
        return $this->attributes['logo_web'] ?  URL::to('/') . '/' . $this->attributes['logo_web'] : null;
    }

    public function setLogoFaviconAttribute($value)
    {
        if($value != null){
            $this->attributes['logo_favicon'] = GlobalConstant::IMAGE . $value;
        }
    }

    public function getLogoFaviconAttribute()
    {
        return $this->attributes['logo_favicon'] ?  URL::to('/') . '/' . $this->attributes['logo_favicon'] : null;
    }
}
