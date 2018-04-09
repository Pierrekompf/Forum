<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sousCategorie()
    {
        return $this->belongsTo(SousCategorie::class);
    }
}
