<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = "houses";
    protected $fillable = ['nazev', 'obrazek_cesta', 'barva'];
    public $timestamp = true;
}
