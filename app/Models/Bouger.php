<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bouger extends Model
{
    use HasFactory;

    protected $table = 'bougers';
    public $fillable = [
        "image_bouger",
        "titre_bouger",
        "description_bouger",
        "pays_id"
    ];

    protected $cast = [
        "pays_id" => 'string'
    ];
}
