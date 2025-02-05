<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $primaryKey = 'reference';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    
    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }
}

