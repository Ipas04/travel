<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'nama',
        'nomor_telepon',
        'alamat',
        'dokumentasi',
        'jumlah_orang',
        'tanggal',
        'total_pembayaran',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
