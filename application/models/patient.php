<?php

class Patient extends Eloquent 
{
	public static $table = 'patient_data';

	public function ophthalmologies()
	{
		return $this->has_many('Ophthalmology');
	}
}