<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    protected $table = 'sous_categories';

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
