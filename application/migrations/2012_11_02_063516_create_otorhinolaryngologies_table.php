<?php

class Create_Otorhinolaryngologies_Table {    

	public function up()
    {
		Schema::create('otorhinolaryngologies', function($t) {
			$t->increments('id');
			$t->integer('patient_id');
			$t->integer('user_id');
			$t->string('class');
			$t->string('application_type');
			$t->string('reference_no');
			$t->string('consent_date');
			$t->string('consent_patient');
			$t->string('category');
			$t->text('history');
			$t->string('ce_head');
			$t->string('ce_buccal');
			$t->string('ce_pharynx');
			$t->string('ce_nasal');
			$t->string('ce_vestibular');
			$t->string('ce_speech');
			$t->string('ce_sinuses');
			$t->string('ce_acoustic');
			$t->string('ce_pneumatic');
			$t->string('ce_impedance');
			$t->string('at_speech');
			$t->string('at_posterior');
			$t->string('at_eog');
			$t->string('at_differential');
			$t->string('at_mirror');
			$t->string('audiometry');
			$t->string('audiogram_a_r');
			$t->string('audiogram_a_l');
			$t->string('audiogram_b_r');
			$t->string('audiogram_b_l');
			$t->text('remarks');
			$t->string('exam_place');

			$t->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('otorhinolaryngologies');

    }

}