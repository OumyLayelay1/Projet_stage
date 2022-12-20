<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loger extends Model
{
    use HasFactory;

        protected $table = 'logers';
        public $fillable =

            ['image_hotel',
            'nom_hotel',
            'description_hotel',
            "pays_id"
        ];

        protected $cast = [
            "pays_id" => 'string'
        ];
}
