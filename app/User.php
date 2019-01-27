<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'employee_type_id', 'date_of_birth', 'start_date', 'gender', 'address', 'address_2', 'country', 'city', 'state', 'postal_code', 'profile_image', 'biography', 'salary', 'phone_number', 'office_phone_number','send_emails_to', 'work_email'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];





    public function companies()
    {
        return $this->hasMany('App\Company');
    }
}
