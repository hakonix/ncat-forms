<?php

class User extends Eloquent 
{
	public function ophthalmologies()
	{
		return $this->has_many('Ophthalmology');
	}
}