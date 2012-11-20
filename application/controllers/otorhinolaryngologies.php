<?php

class Otorhinolaryngologies_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        // $patient = Patient::find($id);
        return Redirect::to_action('otorhinolaryngologies@show', array('2'));
    }    

	public function post_index()
    {

    }    

	public function get_show($id)
    {
        $form = Ophthalmology::find($id);
        $data = array('form' => $form);
        #display a specific client
        return view('otorhinolaryngology.show', $data);

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