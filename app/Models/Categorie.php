<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $primaryKey = 'reference';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    
    public function produit()
    {
        return $this->hasMany('App\Models\Produit');
    }
}
