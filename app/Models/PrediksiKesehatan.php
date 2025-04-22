<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrediksiKesehatan extends Model
{
    use HasFactory;

    protected $table = 'prediksi_kesehatan';

    protected $fillable = [
        'user_id',
        'hasil_prediksi',
        'akurasi',
        'risiko_kesehatan',
        'confidence_score',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //
}
