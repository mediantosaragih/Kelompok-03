<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    protected $table = 'penginapan';
    protected $fillable = [
        'nama', 'kategori','deskripsi'
    ];

    public $timestamps= false;
}