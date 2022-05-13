<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classdetail extends Model
{
    use HasFactory;
    public $fillable = [
        'id',
        'warsztaty_nazwa',
        'opis_warsztatow',
        'opis_krotki',
        'informacje',
        'wiek',
        'rozmiar_grup',
        'file_img',
        'cena',
    ];
}
