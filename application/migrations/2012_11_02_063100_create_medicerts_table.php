<?php

class Create_MediCerts_Table {    

	public function up()
    {
		Schema::create('mediCerts', function($t) {
			$t->increments('id');
			$t->string('class');
			$t->integer('license_no');
			$t->string('height');
			$t->string('weight');
			$t->string('hair');
			$t->string('eyes');
			$t->string('examiner_name');
			$t->string('examiner_add');
			$t->string('date_of_exam');
			$t->string('aeromedical_assessment');
			$t->string('licenses');
			$t->string('limitations');
			$t->date('issue_date');
			$t->date('last_cme_date');
			$t->date('next_cme_date');
			$t->date('last_mge_date');
			$t->date('next_mge_date');
			$t->date('last_ecg_date');
			$t->date('next_ecg_date');
			$t->date('last_ag_date');
			$t->date('next_ag_date');
			$t->integer('ame_id')->unique();
			$t->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('mediCerts');

    }

}

	// "Medicalcert_Class" VARCHAR2(300 BYTE), 
	// "I" VARCHAR2(300 BYTE), 
	// "II" VARCHAR2(300 BYTE), 
	// "III" VARCHAR2(300 BYTE), 
	// "IV" VARCHAR2(300 BYTE), 
	// "V" VARCHAR2(300 BYTE), 
	// "VI" VARCHAR2(50 BYTE), 
	// "VII" VARCHAR2(300 BYTE), 
	// "VIII" VARCHAR2(50 BYTE), 
	// "IX" VARCHAR2(50 BYTE), 
	// "X" VARCHAR2(50 BYTE), 
	// "XI" VARCHAR2(50 BYTE), 
	// "XII" BLOB, 
	// "XIII" VARCHAR2(100 BYTE), 
	// "XIV" VARCHAR2(300 BYTE), 
	// "XV" DATE, 
	// "XVI" VARCHAR2(300 BYTE), 
	// "XVI2" VARCHAR2(300 BYTE), 
	// "XVII" VARCHAR2(300 BYTE), 
	// "XVIII" DATE, 
	// "XIX" BLOB, 
	// "XX" VARCHAR2(300 BYTE), 
	// "XXI" VARCHAR2(300 BYTE), 
	// "XXII" VARCHAR2(300 BYTE), 
	// "XXIII" VARCHAR2(300 BYTE), 
	// "MIMETYPE" VARCHAR2(255 BYTE), 
	// "FILENAME" VARCHAR2(255 BYTE), 
	// "LAST_UPDATE" DATE, 
	// "CHARSET" VARCHAR2(128 BYTE)
 // 