<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    use HasFactory;

    protected $table = 'restos';
    public $fillable = [
        "image_restaurant",
        "titre_restaurant",
        "button_link",
        "address",
        "coordonnee",
        "site_web",
        "pays_id"
    ];

    protected $cast = [
        "pays_id" => 'string'
    ];
}
