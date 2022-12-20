<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    protected $table = 'contactes';
    protected $primaryKey = "search_id";
    public function setNameAttribute($value)
    {
        $this->attributes['image'] = ucwords($value);
        $this->attributes['name'] = ucwords($value);
    }
        
    
}
