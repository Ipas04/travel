<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'jam_mulai',
        'jam_selesai',
        'informasi',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
