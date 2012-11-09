<?php

class Create_MediExams_Table {    

	public function up()
    {
		Schema::create('mediExams', function($t) {
			$t->increments('id');
			$t->integer('user_id');
			$t->integer('patient_id');
			$t->string('category');
			$t->decimal('height', 5, 2);
			$t->decimal('weight', 5, 2);
			$t->decimal('bmi', 5, 2);
			$t->string('eyes');
			$t->string('hair');
			$t->integer('bp');
			$t->string('bp_systolic');
			$t->string('bp_diastolic');
			$t->integer('pulse_rest');
			$t->string('pulse_rate');
			$t->string('pulse_rhythm');
			$t->string('ce_head');
			$t->string('ce_mouth');
			$t->string('ce_nose');
			$t->string('ce_ears');
			$t->string('ce_eyes_orbit');
			$t->string('ce_eyes_pupils');
			$t->string('ce_eyes_ocular');
			$t->string('ce_lungs');
			$t->string('ce_heart');
			$t->string('ce_vascular');
			$t->string('ce_abdomen');
			$t->string('ce_anus');
			$t->string('ce_genito');
			$t->string('ce_endocrine');
			$t->string('ce_upper');
			$t->string('ce_spine');
			$t->string('ce_neurologic');
			$t->string('ce_psychiatric');
			$t->string('ce_skin');
			$t->string('ce_general');
			$t->string('ce_notes');
			$t->string('va_dv_right_s');
			$t->string('va_dv_right_cl');
			$t->string('va_dv_left_s');
			$t->string('va_dv_left_cl');
			$t->string('va_dv_both_s');
			$t->string('va_dv_both_cl');
			$t->string('va_iv_right_s');
			$t->string('va_iv_right_cl');
			$t->string('va_iv_left_s');
			$t->string('va_iv_left_cl');
			$t->string('va_iv_both_s');
			$t->string('va_iv_both_cl');
			$t->string('va_nv_right_s');
			$t->string('va_nv_right_cl');
			$t->string('va_nv_left_s');
			$t->string('va_nv_left_cl');
			$t->string('va_nv_both_s');
			$t->string('va_nv_both_cl');
			$t->boolean('spectacles');
			$t->boolean('contacts');
			$t->boolean('hearing_cv_right');
			$t->boolean('hearing_cv_left');
			$t->boolean('hearing_forced_right');
			$t->boolean('hearing_forced_left');
			$t->string('urine_g');
			$t->string('urine_p');
			$t->string('urine_b');
			$t->string('urine_o');
			$t->boolean('psychometric');
			$t->date('psychometric_date');
			$t->string('pulmonary');
			$t->string('haemoglobin');
			$t->string('ecg');
			$t->string('audiogram');
			$t->string('opthalmology');
			$t->string('orl');
			$t->string('x_ray');
			$t->string('blood');
			$t->string('pulmonary_report');
			$t->string('eeg');
			$t->string('others');
			$t->string('recommendations_fit_class');
			$t->string('recommendations_certificate_class');
			$t->string('recommendations_unfit_class');
			$t->boolean('recommedations_deferred');
			$t->string('recommedations_deferred_why');
			$t->text('comments');



			$t->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('mediExams');

    }

}