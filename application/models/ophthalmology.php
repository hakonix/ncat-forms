<?php

class Ophthalmology extends Eloquent 
{
	public function user()
	{
		 return $this->belongs_to('User');
	}

	public function patient()
	{
		 return $this->belongs_to('Patient');
	}
}