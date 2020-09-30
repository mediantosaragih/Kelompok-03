<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umum extends Model
{
    protected $table = 'umum';
    protected $fillable = [
        'nama', 'kategori','deskripsi'
    ];

    public $timestamps= false;
}
