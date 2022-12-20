<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divertir extends Model
{
    use HasFactory;

        protected $table = 'divertirs';
        public $fillable = [
            'image_distraction',
            'titre_distraction',
           'description_distraction',
           'pays_id'
        ];

        protected $cast = [
            "pays_id" => 'string'
        ];
}
