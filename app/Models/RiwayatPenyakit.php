<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class RiwayatPenyakit extends Model
{
    use HasFactory;

    protected $table = 'riwayat_penyakit';

    protected $fillable = [
        'user_id',
        'penyakit_sebelumnya',
        'alergi',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
