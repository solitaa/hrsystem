<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{




    public function employeeTypes()
    {
        return $this->hasMany('App\EmployeeType');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
