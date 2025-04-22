<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class GayaHidup extends Model
{
    use HasFactory;
    protected $table = 'gaya_hidup'; // karena nama tabel kamu pakai underscore

    protected $fillable = [
        'user_id',
        'durasi_tidur',
        'konsistensi_tidur',
        'begadang',
        'frekuensi_sayur',
        'frekuensi_fastfood',
        'sarapan',
        'durasi_olahraga',
        'frekuensi_olahraga',
        'konsumsi_air',
        'merokok',
        'konsumsi_kafein',
        'tingkat_stress',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //
}
