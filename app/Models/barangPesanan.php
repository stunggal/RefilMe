<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangPesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaksi_id',
        'barang_id',
        'banyaknya',
    ];

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class);
    }

    public function barang()
    {
        return $this->belongsTo(barang::class);
    }
}
