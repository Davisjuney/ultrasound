<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SonographerInput extends Model
{
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
