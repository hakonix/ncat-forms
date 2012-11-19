<?php

class Otorhinolaryngologies_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        $patient = Patient::find($id);
        

    }    

	public function post_index()
    {

    }    

	public function get_show()
    {

    }    

	public function get_edit()
    {

    }    

    public function get_new($pid, $user_id)
    {
        $user = User::find($user_id);
        $patient = Patient::find($pid);

        $data = array('user' => $user, 'patient'=> $patient);
        return View::make('otorhinolaryngology.new', $data);
    }    

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}