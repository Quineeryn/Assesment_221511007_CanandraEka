<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table ='barang';

    protected $fillable = [
        'kodeBarang',
        'namaBarang',
        'Satuan',
        'hargaSatuan',
        'stok',
    ];

    public function barangnota(){

        return $this->hasMany(barangnota::class, 'namaBarang', 'id');
    }

    public function nota(){

        return $this->hasMany(nota::class, 'kodeNota', 'id');
    }
}
