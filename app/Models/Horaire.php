<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    use HasFactory;

    protected $table = 'horaires';
    public $fillable = [
        'jour',
        'heure_ouverture',
        'heure_fermeture',
        'is_closed',
        "resto_id"
    ];

    protected $cast = [
        "resto_id" => 'string'
    ];
}
