<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
		'patient_no',
		'nric',
        'name',
        'gender',
        'phone',
        'address',
        'postcode',
        'city',
        'state',
    ];
    
    public function appointments()
	{
		return $this->hasMany(Appointment::class);
    }
}
