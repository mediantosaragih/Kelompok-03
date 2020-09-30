<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    protected $table = 'transportasi';
    protected $fillable = [
        'nama', 'kategori','deskripsi'
    ];

    public $timestamps= false;
}