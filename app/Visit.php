<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
	protected $fillable = [
		'code',
		'time',
		'date',
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
