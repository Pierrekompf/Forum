<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    protected $table = 'sous_categories';

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

   /* public function categorie() {
        return $this->belongsTo(Categorie::class);
    }*/
}
