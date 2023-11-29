<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenan extends Model
{
    use HasFactory;

    protected $table ='tenan';

    protected $fillable = [
        'kodeTenan',
        'namaTenan',
        'HP',
    ];
}
