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
        'heure_ouvertur',
        'heure_fermetur',
        'is_closed',
        "resto_id"
    ];

    protected $cast = [
        "resto_id" => 'string'
    ];
}
