<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleriImage extends Model
{
    use HasFactory;

    protected $table = 'galleri_images';
    public $fillable = [
        "image",
        "name",
        "description_ville",
        "pays_id"
    ];

    protected $cast = [
        "pays_id" => 'string'
    ];

}

