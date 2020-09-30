<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oleh_oleh extends Model
{
    protected $table = 'oleh_oleh';
    protected $fillable = [
        'nama', 'kategori','deskripsi'
    ];

    public $timestamps= false;
}
