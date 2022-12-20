<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    public $fillable = [
            "images",
           "titre_pays",
            "description_pays",
           "capital",
           "langue_officielle",
           "population",
           "hymne_national",
           "monnaie",
           "fete_national",
           "pays_frontalier",
           "image_capital",
           "titre_capital",
            "description_capital"
    ];
}
