<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScanReport extends Model
{
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
