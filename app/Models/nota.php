<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    use HasFactory;

    protected $table ='nota';

    protected $fillable = [
        'kodeBarang',
        'namaBarang',
        'Satuan',
        'hargaSatuan',
        'stok',
    ];

    public function barang(){
        return $this->belongsTo(barang::class, 'kodeBarang' , 'id');
    }
}
