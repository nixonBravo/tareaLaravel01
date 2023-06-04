<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'frutas';
    protected $fillable = [
        'fruta',
        'cantidad',
        'proveedor',
    ];
}
