<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'descripcion', 'npagina'];

    public $timestamps = false;
}
