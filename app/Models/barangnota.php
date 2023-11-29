<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangnota extends Model
{
    use HasFactory;

    protected $table ='barangnota';

    protected $fillable = [
        'jumlahBarang',
        
    ];

    public function barang(){
        return $this->belongsTo(barang::class, 'kodeBarang' , 'id');
    }
}
