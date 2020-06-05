<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function scan_reports()
    {
        return $this->hasMany('App\Models\ScanReport');
    }
    public function sonographer_inputs()
    {
        return $this->hasMany('App\Models\SonographerInput');
    }
}
