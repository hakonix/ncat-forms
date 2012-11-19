@layout('layout_master')

@section('header')
	<h1>Otorhinolaryngology
		<small>New</small>
	</h1>
@endsection
@section('title')
	Otorhinolaryngology | New
@endsection

<!-- Content for Otorhinolaryngology forms page. Load up the different form fields -->

@section('content')

<div class="tabbable">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a id="n.1" href="#details" data-toggle="tab">Applicant Details</a></li>
        <li class=""><a id="n.2" href="#examination" data-toggle="tab">Clinical Examination</a></li>
        <li class=""><a id="n.3" href="#visual" data-toggle="tab">Audiometry / Audiogram</a></li>
        <li class=""><a id="n.4" href="#recommend" data-toggle="tab">Examiner's Declaration</a></li>
    </ul>

    {{Form::open_for_files('ophthalmologies', 'POST', array('class'=> 'well'));}}
<!-- Hidden fields -->
{{Form::hidden("f[user_id]", $user->id);}}
{{Form::hidden("f[patient_id]", $patient->id);}}


    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="details">
	        	<div class="row">
	        		<div class="span4">
						{{Form::label("f[class]", 'Certificate Class');}}
						{{Form::text("f[class]");}}
						<br>
	        		</div>
	        		<div class="span4">
						{{Form::label("f[application_type]", 'Application Type');}}
						{{Form::text("f[application_type]");}}
						<br>
	        		</div>
						<br>
	        	</div>
	        	<div class="row">
	        		<div class="span4">
	        		</div>
	        		<div class="span4">
						{{Form::label("f[consent_date]", 'Consent Date');}}
						{{Form::text("f[consent_date]");}}
	        		</div>
						{{Form::label("f[category]", 'Exam Category');}}
						{{Form::text("f[category]");}}
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
									{{Form::label("f[ce_head]", 'Head, face, neck, scalp');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_head]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_buccal]", 'Buccal cavity, teeth');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_buccal]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_pharynx]", 'Pharynx');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_pharynx]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_nasal]", 'Nasal passages and naso-pharynx (inc. Anterior rhinoscopy');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_nasal]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_vestibular]", 'Vestibular system incl. Romberg test');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_vestibular]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_speech]", 'Speech');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_speech]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_sinuses]", 'Sinuses');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_sinuses]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_acoustic]", 'Ext. acoustic meati, tympanic membranes');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_acoustic]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_pneumatic]", 'Pneumatic otoscopy');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_pneumatic]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
									{{Form::label("f[ce_impedance]", 'Impedance tympanometry including Valsalva manoevre (initial only)');}}
						    	</td>
						    	<td>
									{{Form::text("f[ce_impedance]");}}
						    	</td>
						    </tr>
					    </tbody>
				    </table>
	        	</div>

	        	<div class="span5">
	        		<strong>Additional Testing (if indicated)</strong>
				    <table class="table table-bordered table-condensed">
					    <thead>
						    <tr>
							    <th></th>
						    </tr>
					    </thead>
					    <tbody>
						    <tr>
						    	<td>
						    		<p>
						    			Speech Audiometry
						    		</p>
						    	</td>
						    	<td>
									{{Form::text("f[at_speech]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
						    		<p>
						    			Posterior rhinoscopy
						    		</p>
						    	</td>
						    	<td>
									{{Form::text("f[at_posterior]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
						    		<p>
						    			EOG: spontaneous and positional nystagmus
						    		</p>
						    	</td>
						    	<td>
									{{Form::text("f[at_eog]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
						    		<p>
						    			Differential Caloric test or vestibular autorotation test
						    		</p>
						    	</td>
						    	<td>
									{{Form::text("f[at_differential]");}}
						    	</td>
						    </tr>
						    <tr>
						    	<td>
						    		<p>
						    			Mirror or fibre laryngoscopy
						    		</p>
						    	</td>
						    	<td>
									{{Form::text("f[at_mirror]");}}
						    	</td>
						    </tr>
					    </tbody>
				    </table>
				    <table class="table table-bordered table-condensed">
					    <thead>
						    <tr>
							    <th colspan='5'>Pure Tone Audiometry</th>
						    </tr>
					    </thead>
					    <tbody>
						    <tr>
						    	<td colspan='1'>
						    		Hz
 						    	</td>
						    	<td colspan='2'>
						    		Right Ear
						    	</td>
						    	<td colspan='2'>
						    		Left Ear
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='1'>
									<strong>
										250
									</strong>
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_right_250]",'', array('class'=>'span2'));}}
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_left_250]",'', array('class'=>'span2'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='1'>
									<strong>
										500
									</strong>
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_right_500]",'', array('class'=>'span2'));}}
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_left_500]",'', array('class'=>'span2'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='1'>
									<strong>
										1000
									</strong>
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_right_1000]",'', array('class'=>'span2'));}}
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_left_1000]",'', array('class'=>'span2'));}}
						    	</td>
						    </tr>
						    <tr>
						    	<td colspan='1'>
									<strong>
										2000
									</strong>
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_right_2000]",'', array('class'=>'span2'));}}
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_left_2000]",'', array('class'=>'span2'));}}
						    	</td>
						    </tr>
							<tr>
						    	<td colspan='1'>
									<strong>
										3000
									</strong>
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_right_3000]",'', array('class'=>'span2'));}}
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_left_3000]",'', array('class'=>'span2'));}}
						    	</td>
							</tr>
							<tr>
						    	<td colspan='1'>
									<strong>
										4000
									</strong>
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_right_4000]",'', array('class'=>'span2'));}}
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_left_4000]",'', array('class'=>'span2'));}}
						    	</td>
							</tr>
							<tr>
						    	<td colspan='1'>
									<strong>
										6000
									</strong>
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_right_6000]",'', array('class'=>'span2'));}}
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_left_6000]",'', array('class'=>'span2'));}}
						    	</td>
							</tr>						    
							<tr>
						    	<td colspan='1'>
									<strong>
										8000
									</strong>
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_right_8000]",'', array('class'=>'span2'));}}
						    	</td>
						    	<td colspan='2'>
			{{Form::text("f[hl_left_8000]",'', array('class'=>'span2'));}}
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
        		<div class="span4 offset3">
        			<table class="table table-bordered table-condensed">
						<tr>
							<th>
								TEST
							</th>
							<th>
								Right Ear (Red)
							</th>
							<th>
								Left Ear (Blue)
							</th>
						</tr>
						<tr>
							<td>
								AIR
							</td>
							<td>
								{{Form::text("f[audiogram_a_r]",'', array('class'=>'span2'));}}

							</td>
							<td>
								{{Form::text("f[audiogram_a_l]",'', array('class'=>'span2'));}}

							</td>
						</tr>
						<tr>
							<td>
								BONE
							</td>
							<td>
								{{Form::text("f[audiogram_b_r]",'', array('class'=>'span2'));}}

							</td>
							<td>
								{{Form::text("f[audiogram_b_l]",'', array('class'=>'span2'));}}

							</td>
						</tr>        				
        			</table>
        		</div>
        	</div>
        	<br>
        	<div class="row">
        		<div class="span8 offset2">
        			<div class="span6">
        			<table class="table table-bordered table-condensed">
        				<tr>
        					<th colspan='2'>
        						Audiogram
        					</th>
        				</tr>
        				<tr>
        					<th>
        						Upload Audiogram:
        					</th>
        					<td>
        						{{Form::file("f[audiogram]");}}
        					</td>
        				</tr>
        			</table>
        			</div>
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
					Otorhinolaryngology remarks and recommendation:
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
        		<div class="span6 offset1">
        			<strong>
					{{Form::label("f[exam_place]", 'Exam Place');}}
        			</strong>
					{{Form::text("f[exam_place]",'', array('class'=>'span5'));}}
					<br>
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