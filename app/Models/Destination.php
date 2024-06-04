<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'foto',
        'harga',
    ];

    public function destinationDetails()
    {
        return $this->hasMany(DestinationDetail::class);
    }
}
