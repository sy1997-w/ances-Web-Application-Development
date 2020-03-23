<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	protected $fillable = [
		'code',
		'date',
        'time',
        'doctor_id',
        'patient_id',
        'description',
        'statue',
    ];

    public function patient()
	{
		return $this->belongsTo(Patient::class);
    }
    
    public function doctor()
	{
		return $this->belongsTo(Doctor::class);
	}
}
