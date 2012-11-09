@layout('layout_master')

@section('header')
	<h1>Ophthalmology
		<small>New</small>
	</h1>
@endsection
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
<!-- Hidden fields -->
{{Form::hidden("f[user_id]", $user->id);}}
{{Form::hidden("f[patient_id]", $patient->id);}}


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
						    	<td>
									<span>Fusional reserve testing</span>
						    	</td>
						    	<td>
									{{Form::select("f[frt]", array('Not performed','Normal','Abnormal'),0);}}	
						    	</td>
						    </tr>
					    </tbody>
				    </table>
				    <table class="table table-bordered table-condensed">
					    <thead>
						    <tr>
							    <th colspan='4'>Colour Perception</th>
						    </tr>
					    </thead>
					    <tbody>
						    <tr>
						    	<td colspan='2'>
			{{Form::label("f[pip_type]", 'Pseudo-Isochromatic plates');}}
						    	</td>
						    	<td>
			{{Form::text("f[pip_type]",'', array('placeholder'=>'Type..', 'class'=>'span3'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='2'>
			{{Form::label("f[pip_no_plate]", 'No. of plates');}}
			{{Form::text("f[pip_no_plate]");}}
						    	</td>
						    	<td>
			{{Form::label("f[pip_no_error]", 'No. of errors');}}
			{{Form::text("f[pip_no_error]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='4'>
									<span>Advanced colour perception testing indicated? &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
									Yes&nbsp&nbsp{{Form::radio("f[acpt]", true, true);}}<span>&nbsp&nbsp&nbsp</span>
									No&nbsp&nbsp{{Form::radio("f[acpt]", 0);}}
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='4'>
			{{Form::label("f[acpt_method]", 'Method');}}
			{{Form::text("f[acpt_method]",'', array('class'=>'span5'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='4'>
									<span>Colour &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
									Safe&nbsp&nbsp{{Form::radio("f[colour]", 'safe', true);}}<span>&nbsp&nbsp&nbsp</span>
									Unsafe&nbsp&nbsp{{Form::radio("f[colour]", 'unsafe');}}<span>&nbsp&nbsp&nbsp&nbsp</span>
						    	</td>
						    </tr>
					    </tbody>
				    </table>
	        	</div>
        	</div>
            <div class='row form-actions'>
                <a onclick="document.getElementById('n.1').click()" class="btn btn-info">← Previous</a>
                <a onclick="document.getElementById('n.3').click()" class="btn btn-info pull-right">Next →</a>
            </div>    
        </div>


        <div class="tab-pane fade" id="visual">
        	<div class="row">
        		<div class="span6">
        			<strong>
			Visual acuity
        			</strong>
        			<table class='table table-bordered table-condensed'>
        				<thead>
        					<tr>
        						<th colspan='3'>
			Distant vision at 5m/6m
        						</th>
        						<th>
        							Spectacles
        						</th>
        						<th>
        							Contacts
        						</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td>
			{{Form::label("f[d_r_eye]", 'Right Eye');}}
        						</td>
        						<td>
			{{Form::text("f[d_r_eye]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
        							Corrected to
        						</td>
        						<td>
			{{Form::text("f[d_r_eye_correct_s]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
			{{Form::text("f[d_r_eye_correct_cl]", '', array('class'=>'span1'));}}
        						</td>
        					</tr>
        					<tr>
        						<td>
			{{Form::label("f[d_l_eye]", 'Left Eye');}}
        						</td>
        						<td>
			{{Form::text("f[d_l_eye]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
        							Corrected to
        						</td>
        						<td>
			{{Form::text("f[d_l_eye_correct_s]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
			{{Form::text("f[d_l_eye_correct_cl]", '', array('class'=>'span1'));}}
        						</td>
        					</tr>
        					<tr>
        						<td>
			{{Form::label("f[d_b_eye]", 'Both Eyes');}}
        						</td>
        						<td>
			{{Form::text("f[d_b_eye]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
        							Corrected to
        						</td>
        						<td>
			{{Form::text("f[d_b_eye_correct_s]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
			{{Form::text("f[d_b_eye_correct_cl]", '', array('class'=>'span1'));}}
        						</td>
        					</tr>
        				</tbody>
        			</table>

        			<table class='table table-bordered table-condensed'>
        				<thead>
        					<tr>
        						<th colspan='3'>
			Intermediate vision at 1m
        						</th>
        						<th>
        							Spectacles
        						</th>
        						<th>
        							Contacts
        						</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td>
			{{Form::label("f[i_r_eye]", 'Right Eye');}}
        						</td>
        						<td>
			{{Form::text("f[i_r_eye]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
        							Corrected to
        						</td>
        						<td>
			{{Form::text("f[i_r_eye_correct_s]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
			{{Form::text("f[i_r_eye_correct_cl]", '', array('class'=>'span1'));}}
        						</td>
        					</tr>
        					<tr>
        						<td>
			{{Form::label("f[i_l_eye]", 'Left Eye');}}
        						</td>
        						<td>
			{{Form::text("f[i_l_eye]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
        							Corrected to
        						</td>
        						<td>
			{{Form::text("f[i_l_eye_correct_s]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
			{{Form::text("f[i_l_eye_correct_cl]", '', array('class'=>'span1'));}}
        						</td>
        					</tr>
        					<tr>
        						<td>
			{{Form::label("f[i_b_eye]", 'Both Eyes');}}
        						</td>
        						<td>
			{{Form::text("f[i_b_eye]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
        							Corrected to
        						</td>
        						<td>
			{{Form::text("f[i_b_eye_correct_s]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
			{{Form::text("f[i_b_eye_correct_cl]", '', array('class'=>'span1'));}}
        						</td>
        					</tr>
        				</tbody>
        			</table>
        		</div>
        		<div class="span5">
        			&nbsp
        			<table class='table table-bordered table-condensed'>
        				<thead>
        					<tr>
        						<th colspan='3'>
			Near vision at 30-50cm
        						</th>
        						<th>
        							Spectacles
        						</th>
        						<th>
        							Contacts
        						</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td>
			{{Form::label("f[n_r_eye]", 'Right Eye');}}
        						</td>
        						<td>
			{{Form::text("f[n_r_eye]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
        							Corrected to
        						</td>
        						<td>
			{{Form::text("f[n_r_eye_correct_s]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
			{{Form::text("f[n_r_eye_correct_cl]", '', array('class'=>'span1'));}}
        						</td>
        					</tr>
        					<tr>
        						<td>
			{{Form::label("f[n_l_eye]", 'Left Eye');}}
        						</td>
        						<td>
			{{Form::text("f[n_l_eye]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
        							Corrected to
        						</td>
        						<td>
			{{Form::text("f[n_l_eye_correct_s]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
			{{Form::text("f[n_l_eye_correct_cl]", '', array('class'=>'span1'));}}
        						</td>
        					</tr>
        					<tr>
        						<td>
			{{Form::label("f[n_b_eye]", 'Both Eyes');}}
        						</td>
        						<td>
			{{Form::text("f[n_b_eye]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
        							Corrected to
        						</td>
        						<td>
			{{Form::text("f[n_b_eye_correct_s]", '', array('class'=>'span1'));}}
        						</td>
        						<td>
			{{Form::text("f[n_b_eye_correct_cl]", '', array('class'=>'span1'));}}
        						</td>
        					</tr>
        				</tbody>
        			</table>

        			<table class='table table-bordered table-condensed'>
        				<thead>
        					<tr>
        						<th>
        							Refraction
        						</th>
        						<th>
        							Sph
        						</th>
        						<th>
        							Cylinder
        						</th>
        						<th>
        							Axis
        						</th>
        						<th>
        							Near(add)
        						</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td>
			{{Form::label("f[refraction_r]", 'Right Eye')}}
        						</td>
        						<td>
			{{Form::text("f[sph_r]", '', array('class'=>'span1'))}}
        						</td>
        						<td>
			{{Form::text("f[cyl_r]", '', array('class'=>'span1'))}}
        						</td>
        						<td>
			{{Form::text("f[axis_r]", '', array('class'=>'span1'))}}
        						</td>
        						<td>
			{{Form::text("f[near_r]", '', array('class'=>'span1'))}}
        						</td>
        					</tr>
        					<tr>
        						<td>
			{{Form::label("f[refraction_l]",'Left Eye');}}
        						</td>
        						<td>
			{{Form::text("f[sph_l]", '', array('class'=>'span1'))}}
        						</td>
        						<td>
			{{Form::text("f[cyl_l]", '', array('class'=>'span1'))}}
        						</td>
        						<td>
			{{Form::text("f[axis_l]", '', array('class'=>'span1'))}}
        						</td>
        						<td>
			{{Form::text("f[near_l]", '', array('class'=>'span1'))}}
        						</td>
        					</tr>
        					<tr>
        						<td colspan='2'>
									Actual refraction examined{{Form::checkbox("f[are]", true);}}<span>&nbsp&nbsp&nbsp</span>
        						</td>
        						<td colspan='3'>
									Spectacles prescription based{{Form::checkbox("f[spb]", true);}}
        						</td>
        					</tr>
        				</tbody>
        			</table>
	   


        		</div>
        	</div>

        	<div class="row">
        		<div class="span6">
        			<table class="table table-bordered table-condensed">
        				<thead>
        					<tr>
        						<th colspan='2'>
									Spectacles
        						</th>
        						<th colspan='2'>
									Contact lenses
        						</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td>
			Yes{{Form::radio("f[spectacles]", true, true);}}
        						</td>
        						<td>
			No{{Form::radio("f[spectacles]", 0);}}
        						</td>
        						<td>
			Yes{{Form::radio("f[contact_lenses]", true, true);}}
        						</td>
        						<td>
			No{{Form::radio("f[contact_lenses]", 0);}}
        						</td>
        					</tr>
        					<tr>
        						<td colspan='2'>
			{{Form::label("f[type_spectacles]", 'Type');}}
			{{Form::text("f[type_spectacles]");}}
        						</td>
        						<td colspan='2'>
			{{Form::label("f[type_contact_lenses]", 'Type');}}
			{{Form::text("f[type_contact_lenses]");}}
        						</td>
        					</tr>
        				</tbody>

        			</table>
        		</div>
        		<div class="span5">
        			<strong>Intra-ocular pressure</strong>
         			<table class="table table-bordered table-condensed">
        				<tbody>
        					<tr>
        						<td>
			{{Form::text("f[iop_right]", '', array('placeholder'=>'Right(mmHg)','class'=>'span3'));}}
        						</td>
        						<td>
			{{Form::text("f[iop_left]", '', array('placeholder'=>'Left(mmHg)','class'=>'span2'));}}
        						</td>
        					</tr>
        					<tr>
        						<td colspan='2'>
									<span>Method: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
									Normal{{Form::radio("f[iop_method]", 'normal', true);}}<span>&nbsp&nbsp&nbsp</span>
									Abnormal{{Form::radio("f[iop_method]", 'abnormal');}}        							
        						</td>
        					</tr>
        				</tbody>
        			</table>        			
        		</div>
        	</div>
            <div class='form-actions'>
                <a onclick="document.getElementById('n.2').click()" class="btn btn-info">← Previous</a>
                <a onclick="document.getElementById('n.4').click()" class="btn btn-info pull-right">Next →</a>
            </div>    
        </div>

        <div class="tab-pane fade" id="recommend">
        	<div class="row">
        		<div class="span10 offset1">
					<strong>
					Ophthalmological remarks and recommendation:
					</strong>
					<br>
					{{Form::textarea("f[remarks]", '', array('class'=>'span9', 'rows'=>'3'));}}
        		</div>
        	</div>

        	<div class="row">
        		<div class="span10 offset1">
	        		<strong>
					Examiner's Declaration: <br>
	        		</strong>
					I hereby certify that I have personally examined the applicant named in this medical examination report and that this report with any attachment embodies my findings completely and correctly. <br>

        		</div>
        	</div>
        	<hr>
        	<div class="row">
        		<div class="span3 offset1">
        			<strong>
					{{Form::label("f[declaration_place]", 'Place');}}
        			</strong>
					{{Form::text("f[declaration_place]");}}
					<br>
					<strong>
					{{Form::label("f[declaration_date]", 'Date');}}
					</strong>
					{{Form::text("f[declaration_date]");}}
        		</div>
        		<div class="span7">
					{{Form::label("f[declaration_e_name]", "Name");}}
					{{Form::text("f[declaration_e_name]", '', array('class'=>'span6'));}}
					{{Form::label("f[declaration_e_address]", "Address");}}
					{{Form::text("f[declaration_e_address]", '',array('class'=>'span6'));}}
					<div class="row">
					<div class="span3">
						{{Form::text("f[declaration_e_phone]",'',array('class'=>'span3', 'placeholder'=>'Telephone No.'));}}
					</div>
					<div class="span3">
						{{Form::text("f[declaration_e_fax]",'',array('class'=>'span3', 'placeholder'=>'Telefax No.'));}}
					</div>
					</div>
        		</div>
        	</div>

			
		{{Form::close();}}

            <div class='form-actions'>
                <a onclick="document.getElementById('n.3').click()" class="btn btn-info">← Previous</a>
				{{Form::submit('         SUBMIT         ', array('class'=>'btn btn-large btn-success btn-submit pull-right'));}}
            </div>    
        </div>

    </div>
</div>


@endsection




<!-- Table layout for print css -->
<div class="row">
	Applicant's Details
	<div class="span12">
		<table>
			<tr>
				<td colspan='4'>
					(1) Surname:
				</td>
				<td colspan='8'>
					(2) Class of Medical certificate applied for 
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(3) Forenames
				</td>
				<td colspan='4'>
					(4) Previous Surname(s)
				</td >
				<td colspan='4'>
					(8) Application
				</td>
			</tr>
			<tr>
				<td rowspan='2' colspan='4'>
					(5) Place and Country of Birth
				</td>
				<td colspan='3'>
					(6) Date of Birth
				</td>
				<td colspan='1'>
					(7) Sex
				</td>
				<td>
					(9) Reference Number
				</td>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table>
			<tr>
			</tr>
		</table>
	</div>
</div>
<div class="row">
	<div class="span6 left">
		<table>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
	</div>
	<div class="span6">
		<table>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table>
			<tr>
			</tr>
		</table>
		<table>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
	</div>
</div>
<div class="row">

</div>
<div class="row">
	<table>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
	</table>
</div>