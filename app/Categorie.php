<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    public function sousCategories() {
        return $this->hasMany(SousCategorie::class);
    }
}
