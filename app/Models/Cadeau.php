<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadeau extends Model
{
    use HasFactory;

    protected $table = 'cadeaus';
    public $fillable = [
        "image_marche",
        "titre_marche",
        "button_link",
        "adress",
        "coordonnee",
        "site_web",
        "pays_id"
    ];

    protected $cast = [
        "pays_id" => 'string'
    ];
}
