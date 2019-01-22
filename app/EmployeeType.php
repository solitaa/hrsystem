<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
