<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'phone_isc',
        'phone_fiqsi',
        'phone_gatra',
        'phone_osiris',
        'whatsapp',
        'alamat',
        'ig',
        'youtube',
    ];
}
