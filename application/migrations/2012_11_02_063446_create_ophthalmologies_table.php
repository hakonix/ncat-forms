<?php

class Create_Ophthalmologies_Table {    

	public function up()
    {
		Schema::create('ophthalmologies', function($t) {
			$t->increments('id');
			$t->integer('user_id');
			$t->integer('patient_id');
			$t->string('cert_class');
			$t->string('birth_place');
			$t->string('application_type');
			$t->integer('reference_no');
			$t->string('license_type');
			$t->date('consent_date');
			$t->string('examination_category');
			$t->text('history');
			$t->string('ce_eyes4');
			$t->string('ce_eyes5');
			$t->string('ce_eyes6');
			$t->string('ce_eyes7');
			$t->string('ce_eyes8');
			$t->string('ce_eyes9');
			$t->decimal('ce_eyes10_conv', 5, 2);
			$t->string('ce_eyes10');
			$t->decimal('ce_eyes11_acc', 5, 2);
			$t->string('ce_eyes11');
			$t->string('ortho_1');
			$t->string('ortho_2');
			$t->string('eso_1');
			$t->string('eso_2');
			$t->string('exo_1');
			$t->string('exo_2');
			$t->string('hyper_1');
			$t->string('hyper_2');
			$t->string('cyclo_1');
			$t->string('cyclo_2');
			$t->boolean('tropia');
			$t->boolean('phoria');
			$t->string('frt');
			$t->string('pip_type');
			$t->string('pip_no_plate');
			$t->string('pip_no_error');
			$t->boolean('acpt');
			$t->string('acpt_method');
			$t->string('colour');
			$t->string('d_r_eye');
			$t->string('d_l_eye');
			$t->string('d_b_eye');
			$t->string('d_r_eye_correct_s');
			$t->string('d_r_eye_correct_cl');
			$t->string('d_l_eye_correct_s');
			$t->string('d_l_eye_correct_cl');
			$t->string('d_b_eye_correct_s');
			$t->string('d_b_eye_correct_cl');
			$t->string('i_r_eye');
			$t->string('i_l_eye');
			$t->string('i_b_eye');
			$t->string('i_r_eye_correct_s');
			$t->string('i_r_eye_correct_cl');
			$t->string('i_l_eye_correct_s');
			$t->string('i_l_eye_correct_cl');
			$t->string('i_b_eye_correct_s');
			$t->string('i_b_eye_correct_cl');
			$t->string('n_r_eye');
			$t->string('n_l_eye');
			$t->string('n_b_eye');
			$t->string('n_r_eye_correct_s');
			$t->string('n_r_eye_correct_cl');
			$t->string('n_l_eye_correct_s');
			$t->string('n_l_eye_correct_cl');
			$t->string('n_b_eye_correct_s');
			$t->string('n_b_eye_correct_cl');
			$t->string('sph_r');
			$t->string('sph_l');
			$t->string('cyl_r');
			$t->string('cyl_l');
			$t->string('axis_r');
			$t->string('axis_l');
			$t->string('near_r');
			$t->string('near_l');
			$t->boolean('are');
			$t->boolean('spb');
			$t->boolean('spectacles');
			$t->string('type_spectacles');
			$t->boolean('contact_lenses');
			$t->string('type_contact_lenses');
			$t->decimal('iop_right', 5, 2);
			$t->decimal('iop_left', 5, 2);
			$t->string('iop_method');
			$t->string('remarks');
			$t->string('declaration');
			$t->string('declaration_place');
			$t->date('declaration_date');
			$t->string('declaration_e_name');
			$t->string('declaration_e_address');
			$t->string('declaration_e_phone');
			$t->string('declaration_e_fax');
			$t->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('ophthalmologies');

    }

}