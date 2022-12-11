<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'alamat',
        'tagihan',
        'status',
        'kurir',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
