<?php

class Ophthalmologies_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        // if(isset($_GET['authId'])) {
        //     Session::put('user', $_GET['authId']);
        // }

        // $user_id = Session::get('user');
        // $patient = Patient::find($pid);

        // $data = array('forms' => $patient->ophthalmologies, 'patient' => $patient, 'user_id' => $user_id);
        // return view('ophthalmology.index', $data);
    return Redirect::to_action('ophthalmologies@show', array('2'));
    }    

	public function post_index()
    {
        #create a new client
        $params = Input::get('f');
        $patient = Patient::find($params['patient_id']);
        $user = User::find($params['user_id']);
        $form = new Ophthalmology;
        $form->fill($params);
        if ($form->save()) {
            // $user->ophthalmologies()->insert('$form');
            return Redirect::to_action('ophthalmologies/index', array($patient->id, $user->id));
        } else {
            # code...
            return Redirect::to_action('ophthalmologies/new', array(''));
        }

    }    

	public function get_show($id)
    {
        $form = Ophthalmology::find($id);
        $data = array('form' => $form);
        #display a specific client
        return view('ophthalmology.show', $data);
    }    

	public function get_edit()
    {

    }    

	public function get_new($pid, $user_id)
    {
        $user = User::find($user_id);
        $patient = Patient::find($pid);

        $data = array('user' => $user, 'patient'=> $patient);
        return View::make('ophthalmology.new', $data);
    }    

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}