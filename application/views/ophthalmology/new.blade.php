@layout('layout_master')
@section('title')
	Ophthalmology | New
@endsection

<!-- Content for ophthalmology forms page. Load up the different form fields -->

@section('content')

<div class="tabbable">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a id="n.1" href="#details" data-toggle="tab">Applicant Details</a></li>
        <li class=""><a id="n.2" href="#examination" data-toggle="tab">Clinical Examination</a></li>
        <li class=""><a id="n.3" href="#visual" data-toggle="tab">Visual Acuity</a></li>
        <li class=""><a id="n.4" href="#recommend" data-toggle="tab">Examiner's Declaration</a></li>
    </ul>
    {{Form::open('ophthalmologies', 'POST', array('class'=> 'well'));}}
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="details">
	        	<div class="row">
	        		<div class="span4">
						{{Form::label("f[cert_class]", 'Certificate Class');}}
						{{Form::text("f[cert_class]");}}
						<br>
	        		</div>
	        		<div class="span4">
						{{Form::label("f[birth_place]", 'Birth Place');}}
						{{Form::text("f[birth_place]");}}
						<br>
	        		</div>
						{{Form::label("f[application_type]", 'Application Type');}}
						{{Form::text("f[application_type]");}}
						<br>
	        	</div>
	        	<div class="row">
	        		<div class="span4">
						{{Form::label("f[license_type]", 'License Type');}}
						{{Form::text("f[license_type]");}}
	        		</div>
	        		<div class="span4">
						{{Form::label("f[consent_date]", 'Consent Date');}}
						{{Form::text("f[consent_date]");}}
	        		</div>
						{{Form::label("f[examination_category]", 'Exam Category');}}
						{{Form::text("f[examination_category]");}}
				</div>
				<div class="row">
					<div class="span8">
						{{Form::label("f[history]", 'History');}}
						{{Form::textarea("f[history]",'',array('class' => 'span10'));}}
						<br>
					</div>
	        	</div>
            <div class='form-actions'>
                <a onclick="document.getElementById('n.2').click()" class="btn btn-info pull-right">Next →</a>
            </div>    
        </div>


        <div class="tab-pane fade" id="examination">
        	<div class="row">

	        	<div class="span5">
				    <table class="table table-bordered table-striped table-condensed">
					    <thead>
						    <tr>
							    <th>Clinical Examination</th>
							    <th>Result</th>
						    </tr>
					    </thead>
					    <tbody>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes4]", 'Eyes, External & Eyelids');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes4]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes5]", 'Eyes Exterior');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes5]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes6]", 'Eyes position and movements');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes6]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes7]", 'Visual fields');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes7]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes8]", 'Pupillary reflexes');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes8]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes9]", 'Fundi (Ophthalmoscopy)');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes9]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes10_conv]", 'Convergence');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes10_conv]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes10]", 'cm');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes10]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes11_acc]", 'Accommodation');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes11_acc]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_eyes11]", 'D');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_eyes11]");}}
						    	</td>
						    </tr>
					    </tbody>
				    </table>
	        	</div>

	        	<div class="span5">
	        		<strong>Ocular muscle balance</strong>
				    <table class="table table-bordered table-condensed">
					    <thead>
						    <tr>
							    <th>Distant at 5/6 metres</th>
							    <th>Near at 30-50 cm</th>
						    </tr>
					    </thead>
					    <tbody>
						    <tr>
						    	<td>
									{{Form::text("f[ortho_1]",'', array('placeholder'=>'Ortho..'));}}
						    	</td>
						    	<td>
									{{Form::text("f[ortho_2]",'', array('placeholder'=>'Ortho..'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::text("f[eso_1]",'', array('placeholder'=>'Eso..'));}}
						    	</td>
						    	<td>
									{{Form::text("f[eso_2]",'', array('placeholder'=>'Eso..'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::text("f[exo_1]",'', array('placeholder'=>'Exo..'));}}
						    	</td>
						    	<td>
									{{Form::text("f[exo_2]",'', array('placeholder'=>'Exo..'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::text("f[hyper_1]",'', array('placeholder'=>'Hyper..'));}}
						    	</td>
						    	<td>
									{{Form::text("f[hyper_2]",'', array('placeholder'=>'Hyper..'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::text("f[cyclo_1]",'', array('placeholder'=>'Cyclo..'));}}
						    	</td>
						    	<td>
									{{Form::text("f[cyclo_2]",'', array('placeholder'=>'Cyclo..'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='2'>
									<span>Tropia &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
									Yes{{Form::radio("f[tropia]", 'yes', true);}}<span>&nbsp&nbsp&nbsp</span>
									No{{Form::radio("f[tropia]", 'no');}}<span>&nbsp&nbsp&nbsp&nbsp</span>
									<span>Phoria &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
									Yes{{Form::radio("f[phoria]", true, true);}}
									No{{Form::radio("f[phoria]", 0);}}
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='2'>
									<span>Fusional reserve testing</span>
									{{Form::select("f[frt]", array('Not performed','Normal','Abnormal'),0);}}					    		
						    	</td>
						    </tr>
					    </tbody>
				    </table>
	        	</div>
        	</div>


        	<div>
			{{Form::label("f[pip_type]", 'Pseudo-Isochromatic plates');}}
			{{Form::text("f[pip_type]");}}
			<br>
			{{Form::label("f[pip_no_plate]", 'No. of plates');}}
			{{Form::text("f[pip_no_plate]");}}
			<br>
			{{Form::label("f[pip_no_error]", 'No. of errors');}}
			{{Form::text("f[pip_no_error]");}}
			<br>
			{{Form::label("f[acpt]", 'Advanced colour perception testing indicated?');}}<br>
			Yes{{Form::radio("f[acpt]", true, true);}}
			No{{Form::radio("f[acpt]", 0);}}
			<br>
			{{Form::label("f[acpt_method]", 'Method');}}
			{{Form::text("f[acpt_method]");}}
			<br>
			{{Form::label("f[safe]", 'Colour SAFE');}}
			{{Form::checkbox("f[safe]", 'yes');}}
			<br>
			{{Form::label("f[unsafe]", 'Colour UNSAFE');}}
			{{Form::checkbox("f[unsafe]", 'yes');}}
			<br>
        	</div>

            <div class='row form-actions'>
                <a onclick="document.getElementById('n.1').click()" class="btn btn-info">← Previous</a>
            </div>    
            <button onclick="document.getElementById('n.1').click()">previous</button>
        </div>


        <div class="tab-pane fade" id="visual">
			Visual acuity <br>
			Distant vision at 5m/6m <br>
			{{Form::label("f[d_r_eye]", 'Right Eye');}}
			{{Form::text("f[d_r_eye]");}}
			<br>
			{{Form::label("f[d_l_eye]", 'Left Eye');}}
			{{Form::text("f[d_l_eye]");}}
			<br>
			{{Form::label("f[d_b_eye]", 'Both Eyes');}}
			{{Form::text("f[d_b_eye]");}}
			<br>
			{{Form::label("f[d_r_eye_correct_s]", 'Corrected to');}}
			{{Form::text("f[d_r_eye_correct_s]");}}
			<br>
			{{Form::label("f[d_r_eye_correct_cl]", 'Corrected to');}}
			{{Form::text("f[d_r_eye_correct_cl]");}}
			<br>
			{{Form::label("f[d_l_eye_correct_s]", 'Corrected to');}}
			{{Form::text("f[d_l_eye_correct_s]");}}
			<br>
			{{Form::label("f[d_l_eye_correct_cl]", 'Corrected to');}}
			{{Form::text("f[d_l_eye_correct_cl]");}}
			<br>
			{{Form::label("f[d_b_eye_correct_s]", 'Corrected to');}}
			{{Form::text("f[d_b_eye_correct_s]");}}
			<br>
			{{Form::label("f[d_b_eye_correct_cl]", 'Corrected to');}}
			{{Form::text("f[d_b_eye_correct_cl]");}}
			<br>

			Intermediate vision at 1m <br>
			{{Form::label("f[i_r_eye]", 'Right Eye');}}
			{{Form::text("f[i_r_eye]");}}
			<br>
			{{Form::label("f[i_l_eye]", 'Left Eye');}}
			{{Form::text("f[i_l_eye]");}}
			<br>
			{{Form::label("f[i_b_eye]", 'Both Eyes');}}
			{{Form::text("f[i_b_eye]");}}
			<br>
			{{Form::label("f[i_r_eye_correct_s]", 'Corrected to');}}
			{{Form::text("f[i_r_eye_correct_s]");}}
			<br>
			{{Form::label("f[i_r_eye_correct_cl]", 'Corrected to');}}
			{{Form::text("f[i_r_eye_correct_cl]");}}
			<br>
			{{Form::label("f[i_eye_correct_s]", 'Corrected to');}}
			{{Form::text("f[i_l_eye_correct_s]");}}
			<br>
			{{Form::label("f[i_l_eye_correct_cl]", 'Corrected to');}}
			{{Form::text("f[i_l_eye_correct_cl]");}}
			<br>
			{{Form::label("f[i_b_eye_correct_s]", 'Corrected to');}}
			{{Form::text("f[i_b_eye_correct_s]");}}
			<br>
			{{Form::label("f[i_b_eye_correct_cl]", 'Corrected to');}}
			{{Form::text("f[i_b_eye_correct_cl]");}}
			<br>
			
			Near vision at 30-50 <br>
			{{Form::label("f[n_r_eye]", 'Right Eye');}}
			{{Form::text("f[n_r_eye]");}}
			<br>
			{{Form::label("f[n_l_eye]", 'Left Eye');}}
			{{Form::text("f[n_l_eye]");}}
			<br>
			{{Form::label("f[n_b_eye]", 'Both Eyes');}}
			{{Form::text("f[n_b_eye]");}}
			<br>
			{{Form::label("f[n_r_eye_correct_s]", 'Corrected to');}}
			{{Form::text("f[n_r_eye_correct_s]");}}
			<br>
			{{Form::label("f[n_r_eye_correct_cl]", 'Corrected to');}}
			{{Form::text("f[n_r_eye_correct_cl]");}}
			<br>
			{{Form::label("f[n_l_eye_correct_s]", 'Corrected to');}}
			{{Form::text("f[n_l_eye_correct_s]");}}
			<br>
			{{Form::label("f[n_l_eye_correct_cl]", 'Corrected to');}}
			{{Form::text("f[n_l_eye_correct_cl]");}}
			<br>
			{{Form::label("f[n_b_eye_correct_s]", 'Corrected to');}}
			{{Form::text("f[n_b_eye_correct_s]");}}
			<br>
			{{Form::label("f[n_b_eye_correct_cl]", 'Corrected to');}}
			{{Form::text("f[n_b_eye_correct_cl]");}}
			<br>
			{{Form::label("f[refraction_r]", 'Right Eye')}}
			{{Form::text("f[sph_r]")}}
			{{Form::text("f[cyl_r]")}}
			{{Form::text("f[axis_r]")}}
			{{Form::text("f[near_r]")}}
			<br>
			{{Form::label("f[refraction_l]",'Left Eye');}}
			{{Form::text("f[sph_l]")}}
			{{Form::text("f[cyl_l]")}}
			{{Form::text("f[axis_l]")}}
			{{Form::text("f[near_l]")}}
			<br>
			{{Form::label("f[spectacles]",'Spectacles');}}
			Yes{{Form::radio("f[spectacles]", true, true);}}
			No{{Form::radio("f[spectacles]", 0);}}
			<br>
			{{Form::label("f[type_spectacles]", 'Type');}}
			{{Form::text("f[type_spectacles]");}}
			<br>
			{{Form::label("f[contact_lenses]",'Contact lenses');}}
			Yes{{Form::radio("f[contact_lenses]", true, true);}}
			No{{Form::radio("f[contact_lenses]", 0);}}
			<br>
			{{Form::label("f[type_contact_lenses]", 'Type');}}
			{{Form::text("f[type_contact_lenses]");}}
			<br>
			Intra-ocular pressure <br>
			{{Form::label("f[iop_right]", 'Right (mmHg)');}}
			{{Form::text("f[iop_right]");}}
			<br>
			{{Form::label("f[iop_left]", 'Left (mmHg)');}}
			{{Form::text("f[iop_left]");}}
			<br>
			{{Form::label("f[iop_method]", 'Method:');}}
			{{Form::text("f[iop_method]");}}
			<br>

            <div class='form-actions'>
                <a onclick="document.getElementById('n.1').click()" class="btn btn-info">← Previous</a>
            </div>    
            <button onclick="document.getElementById('n.1').click()">previous</button>
        </div>

        <div class="tab-pane fade" id="recommend">
			Ophthalmological remarks and recommendation: <br>
			{{Form::textarea("f[remarks]");}}
			<br>
			Examiner's Declaration: <br>
			I hereby certify that I have personally examined the applicant named in this medical examination report and that this report with any attachment embodies my findings completely and correctly. <br>

			{{Form::label("f[declaration_place]", 'Place');}}
			{{Form::text("f[declaration_place]");}}
			<br>
			{{Form::label("f[declaration_date]", 'Date');}}
			{{Form::text("f[declaration_date]");}}
			<br>
			Ophth. Examiner's Name and Address<br>
			{{Form::label("f[declaration_e_name]", "Name");}}
			{{Form::text("f[declaration_e_name]");}}
			<br>
			{{Form::label("f[declaration_e_address]", "Address");}}
			{{Form::text("f[declaration_e_address]");}}
			<br>
			{{Form::label("f[declaration_e_phone]", "Telephone No.");}}
			{{Form::text("f[declaration_e_phone]");}}
			<br>
			{{Form::label("f[declaration_e_fax]", "Telefax No.");}}
			{{Form::text("f[declaration_e_fax]");}}
			<br>

			{{Form::submit('Submit');}}
			
		{{Form::close();}}

            <div class='form-actions'>
                <a onclick="document.getElementById('n.2').click()" class="btn btn-info pull-right">Next →</a>
            </div>    
        </div>

    </div>
</div>


@endsection

<!-- 		Schema::create('ophthalmologies', function($t) {
			$t->increments('id');
			$t->integer('user_id');
			$t->integer('patient_id');
			$t->string('cert_class');
			$t->string('birth_place');
			$t->string('application_type');
			$t->integer('reference_no')->unique();
			$t->string('license_type');

			$t->string('declaration');
			$t->string('declaration_place');
			$t->date('declaration_date');
			$t->string('declaration_e_name');
			$t->string('declaration_e_address');
			$t->string('declaration_e_phone');
			$t->string('declaration_e_fax');
 -->