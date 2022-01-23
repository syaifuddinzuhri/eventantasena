<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_lomba_id',
        'nama',
        'deskripsi',
        'start',
        'end'
    ];

    /**
     * Get the kategori_lomba that owns the Jadwal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori_lomba(): BelongsTo
    {
        return $this->belongsTo(KategoriLomba::class, 'kategori_lomba_id');
    }
}
