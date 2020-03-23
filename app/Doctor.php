<?php

namespace App;
use App\Appointment;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
		'doctor_no',
		'nric',
        'name',
        'gender',
        'phone',
        'education',
        'description',
    ];
    
    public function appointments()
	{
		return $this->hasMany(Appointment::class);
    }


}
