@layout('layout_master')

@section('header')
	<h1>Otorhinolaryngology
		<small>{{$form->patient->fname}} {{$form->patient->mname}} {{$form->patient->lname}}</small>
	</h1>
@endsection
@section('title')
	Otorhinolaryngology | New
@endsection

<!-- Content for Otorhinolaryngology forms page. Load up the different form fields -->

@section('content')


	<div class="row">
	<div class="span12">
		<strong>
			Applicant's Details
		</strong>
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='4'>

					<strong>(1) Surname:</strong> <br>
					<p class="pull-right">
						{{$form->patient->lname}}
					</p>
				</td>
				<td colspan='8'>
					<strong>(2) Class of Medical certificate applied for</strong> <br>
					{{$form->cert_class}}
				</td>
			</tr>
			<tr>
				<td rowspan='2' colspan='4'>
					<strong>(3) Forenames:</strong><br>
					<p class="pull-right">
						{{$form->patient->fname}} {{$form->patient->mname}}
					</p>
				</td>
				<td colspan='4'>
					<strong>(4) Previous Surname(s)</strong><br>
					<p class="pull-right">
						{{$form->patient->mothersname}}
					</p>
				</td >
				<td colspan='4'>
					<strong>(8) Application</strong> <br>
					<p class="pull-right">
						{{$form->application_type}}
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='3'>
					<strong>(6) Date of Birth</strong> <br>
					<p class="pull-right">
						{{$form->patient->DOB}}
					</p>
				</td>
				<td colspan='1'>
					<strong>(7) Sex </strong><br>
					<p class="pull-right">
						{{$form->patient->sex}}
					</p>
				</td>
				<td>
					<strong>(9) Reference Number</strong> <br>
					<p class="pull-right">
						{{$form->reference_no}}
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='12'>
					<strong>(301) Consent to release of medical information:</strong> <br> I hereby authorize the release of all information contained in this report and any or all attachments to the Aeromedical Examiner, the Authority and where necessary the Aeromedical section of another State, recognising that these documents, or any other electronically stored data are to be used for completion of a medical assessment and will become and remain the property of the Authority, providing that I or my physician may have access to them according to national law. Medical Confidentiality will be respected at all times: <br><br><br>
					<p><strong>Date:</strong>{{$form->created_at}} <strong>Signature of the applicant:</strong>_____________________ Signature of medical examiner(witness)</p>
				</td>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='1'>
					<strong>(302) Examination Category</strong>
					{{$form->examination_category}}
				</td>
				<td colspan='10' rowspan='5'>
					<div class="span10">
					<strong>(303) Otorhinolaryngology History</strong> <br>
					<p>
						{{$form->history}}
					</p>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan='1'>
					Initial
				</td>
			</tr>
			<tr>
				<td colspan='1'>
					Extended
				</td>
			</tr>
			<tr>
				<td>
					Renewal/Reval
				</td>
			</tr>
			<tr>
				<td>
					Special Referral
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="row">
	<div class="span6 left">
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='4'>
					Check each item
				</td>
				<td>
					Normal
				</td>
				<td>
					Abnormal
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(404) Head, face, neck, scalp
				</td>
				<td>
					<p>
						@if ($form->ce_eyes4 == 'Normal')
							✔
						@endif
					</p>
				</td>
				<td>
					<p>
						@if ($form->ce_eyes4 != 'Normal')
							✔
						@endif
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(405) Buccal cavity, teeth
				</td>
				<td>
					<p>
						@if ($form->ce_eyes5 == 'Normal')
							✔
						@endif						
					</p>
				</td>
				<td>
					<p>
						@if ($form->ce_eyes5 != 'Normal')
							✔
						@endif						
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(406) Pharynx
				</td>
				<td>
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(406) Nasal passages and naso-pharynx (inc. Anterior rhinoscopy)
				</td>
				<td>
					<p>
						@if ($form->ce_eyes6 == 'Normal')
							✔
						@endif						
					</p>
				</td>
				<td>
					<p>
						@if ($form->ce_eyes6 != 'Normal')
							✔
						@endif						
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(407) Vestibular system incl. Romberg test
				</td>
				<td>
					<p>
						@if ($form->ce_eyes7 == 'Normal')
							✔
						@endif						
					</p>
				</td>
				<td>
					<p>
						@if ($form->ce_eyes7 != 'Normal')
							✔
						@endif						
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(408) Speech
				</td>
				<td>
					<p>
						@if ($form->ce_eyes8 == 'Normal')
							✔
						@endif						
					</p>
				</td>
				<td>
					<p>
						@if ($form->ce_eyes8 != 'Normal')
							✔
						@endif						
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(409) Sinuses
				</td>
				<td>
					<p>
						@if ($form->ce_eyes9 == 'Normal')
							✔
						@endif						
					</p>
				</td>
				<td>
					<p>
						@if ($form->ce_eyes9 != 'Normal')
							✔
						@endif						
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(410) Ext. acoustic meati, tympanic membranes
				</td>
				<td>
					<p>
						@if ($form->ce_eyes10 == 'Normal')
							✔
						@endif						
					</p>
				</td>
				<td>
					<p>
						@if ($form->ce_eyes10 != 'Normal')
							✔
						@endif						
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(411) Pneumatic otoscopy
				</td>
				<td>
					<p>
						@if ($form->ce_eyes11 == 'Normal')
							✔
						@endif						
					</p>
				</td>
				<td>
					<p>
						@if ($form->ce_eyes11 != 'Normal')
							✔
						@endif						
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(412) Impedance tympanometry including Valsalva manoevre (initial only)
				</td>
				<td>
					<p>
						@if ($form->ce_eyes9 == 'Normal')
							✔
						@endif						
					</p>
				</td>
				<td>
					<p>
						@if ($form->ce_eyes9 != 'Normal')
							✔
						@endif						
					</p>
				</td>
			</tr>
		</table>
		
		<table class='table table-striped table-bordered'>
			<tr>
				<th colspan='3'>
					Additional Testing (If indicated)
				</th>
				<th>
					Not Performed
				</th>
				<th>
					Normal
				</th>		
				<th>
					Abnormal
				</th>
			</tr>
			<tr>
				<td colspan='3'>
					(414) Speech Audiometry
				</td>
				<td>
				</td>
				<td>
				</td>		
				<td>
				</td>
			</tr>
			<tr>
				<td colspan='3'>
					(415) Posterior rhinoscopy
				</td>
				<td>
					
				</td>
				<td>
				</td>		
				<td>
				</td>
			</tr>
			<tr>
				<td colspan='3'>
					(416) EOG: spontaneous and positional nystagmus
				</td>
				<td>
					
				</td>
				<td>
				</td>		
				<td>
				</td>
			</tr>
			<tr>
				<td colspan='3'>
					(417) Differential Caloric test or vestibular autorotation test
				</td>
				<td>
					
				</td>
				<td>
				</td>		
				<td>
				</td>
			</tr>
			<tr>
				<td colspan='3'>
					(418) Mirror or fibre laryngoscopy
				</td>
				<td>
					
				</td>
				<td>
				</td>		
				<td>
				</td>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
				<td>
					<strong>
					(421) Otorhinolaryngology remarks and recommendations
					</strong>
				</td>
			</tr>
			<tr>
				<td>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex.
				</td>
			</tr>
		</table>
	</div>
	<div class="span6">
		<strong>
		(419) Pure tone audiometry
		</strong>
		<table class='table table-striped table-bordered'>
			<tr>
				<th>
					Hz
				</th>
				<th colspan='2'>
					Right Ear
				</th>
				<th colspan='2'>
					Left Ear
				</th>
			</tr>
			<tr>
				<td>
					250
				</td>
				<td colspan='2'>
				</td>
				<td colspan='2'>
				</td>
			</tr>
			<tr>
				<td>
					500
				</td>
				<td colspan='2'>
				</td>
				<td colspan='2'>
				</td>
			</tr>
			<tr>
				<td>
					1000
				</td>
				<td colspan='2'>
				</td>
				<td colspan='2'>
				</td>
			</tr>
			<tr>
				<td>
					2000
				</td>
				<td colspan='2'>
				</td>
				<td colspan='2'>
				</td>
			</tr>
			<tr>
				<td>
					3000
				</td>
				<td colspan='2'>
				</td>
				<td colspan='2'>
				</td>
			</tr>
			<tr>
				<td>
					4000
				</td>
				<td colspan='2'>
				</td>
				<td colspan='2'>
				</td>
			</tr>
			<tr>
				<td>
					6000
				</td>
				<td colspan='2'>
				</td>
				<td colspan='2'>
				</td>
			</tr>
			<tr>
				<td>
					8000
				</td>
				<td colspan='2'>
				</td>
				<td colspan='2'>
				</td>
			</tr>			
		</table>
		<div class="span2">
			<strong>
			(420) Audiogram
			</strong>
		</div>
			<div class="offset2">
				<table class='table table-striped table-bordered'>
					<tr>
						<th>
							TEST
						</th>
						<th>
							Right Ear <br>(RED)
						</th>
						<th>
							Left Ear <br>(BLUE)
						</th>
					</tr>
					<tr>
						<td>
							AIR
						</td>
						<td>
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
							BONE
						</td>
						<td>
						</td>
						<td>
						</td>
					</tr>
				</table>
			</div>
		<table class='table table-striped table-bordered'>
			<tr>
				<td>
					<a class="thumbnail">
						{{HTML::image('http://placehold.it/420x315', 'Audiogram', array('height'=>'315', 'width'=>'420'));}}
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<div class="pagination-centered">
						<em class="centre pagination-centered">Reference Thresholds (Hz)</em>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="row">
	<div class="span12">
			<strong>
				Examiner's Declaration
			</strong>
	</div>
</div>
<div class="row">
	<div class="span12">
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='3'>
					I hereby certify that I ave personally examined the applicant named on this medical examination report and that this report with any attachment embodies my findings completely and correctly. <br>
					<p class="pull-right">{{$form->user->lname}}</p>
				</td>
			</tr>
			<tr>
				<td>
					(323) Place and date: <br>
					{{$form->created_at}}
				</td>
				<td rowspan='2'>
					ORL Examiner's Name and Address: <p class="pull-right">{{$form->user->fname}} {{$form->user->lname}}</p><br><br>
					Telephone No:<p class="pull-right">{{$form->user->phone}}</p><br>
					Telefax No:<p class="pull-right">{{$form->user->fax}}</p>
				</td>
				<td rowspan='2'>
					AME Stamp with No:
				</td>
			</tr>
			<tr>
				<td>
					Authorized Medical Examiner's Signature:
				</td>
			</tr>
		</table>
	</div>
</div>


@endsection

