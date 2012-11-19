@layout('layout_master')

@section('header')
	<h1>Ophthalmology
		<small>{{$form->patient->fname}} {{$form->patient->mname}} {{$form->patient->lname}}</small>
	</h1>
@endsection
@section('title')
	Ophthalmology | New
@endsection

<!-- Content for ophthalmology forms page. Load up the different form fields -->

@section('content')


	<div class="row">
	<div class="span12">
	Applicant's Details
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='4'>
					(1) Surname: <br>
					<p class="pull-right">
						{{$form->patient->lname}}
					</p>
				</td>
				<td colspan='8'>
					(2) Class of Medical certificate applied for <br>
					{{$form->cert_class}}
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(3) Forenames:<br>
					<p class="pull-right">
						{{$form->patient->fname}} {{$form->patient->mname}}
					</p>
				</td>
				<td colspan='4'>
					(4) Previous Surname(s)<br>
					<p class="pull-right">
						{{$form->patient->mothersname}}
					</p>
				</td >
				<td colspan='4'>
					(8) Application <br>
					<p class="pull-right">
						{{$form->application_type}}
					</p>
				</td>
			</tr>
			<tr>
				<td rowspan='2' colspan='4'>
					(5) Place and Country of Birth <br>
					<p class="pull-right">
						{{$form->birth_place}}
					</p>
				</td>
				<td colspan='3'>
					(6) Date of Birth <br>
					<p class="pull-right">
						{{$form->patient->DOB}}
					</p>
				</td>
				<td colspan='1'>
					(7) Sex <br>
					<p class="pull-right">
						{{$form->patient->sex}}
					</p>
				</td>
				<td>
					(9) Reference Number <br>
					<p class="pull-right">
						{{$form->reference_no}}
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(10) Nationality <br>
					<p class="pull-right">
						Nigerian
					</p>
				</td>
				<td colspan='4'>
					(11) Type of License desired:
					<p class="pull-right">
						{{$form->license_type}}
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='12'>
					(301) Consent to release of medical information: I hereby authorize the release of all information contained in this report and any or all attachments to the Aeromedical Examiner, the Authority and where necessary the Aeromedical section of another State, recognising that these documents, or any other electronically stored data are to be used for completion of a medical assessment and will become and remain the property of the Authority, providing that I or my physician may have access to them according to national law. Medical Confidentiality will be respected at all times: <br><br><br>
					<p>Date:{{$form->created_at}} Signature of the applicant:_____________________ Signature of medical examiner(witness)</p>
				</td>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='1'>
					(302) Examination Category
					{{$form->examination_category}}
				</td>
				<td colspan='10' rowspan='5'>
					<div class="span10">
					(303) Ophthalmological History <br>
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
					(304) Eyes, External & eyelids
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
					(305) Eyes Exterior
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
					(Slit lamp, ophth.)
				</td>
				<td>
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					(306) Eye position and movements
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
					(307) Visual fields (confrontation)
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
					(308) Pupillary reflexes
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
					(309) Fundi (Ophthalmoscopy)
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
				<td colspan='3'>
					(310) Convergence
				</td>
				<td>
					{{$form->ce_eyes10_conv}} cm
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
				<td colspan='3'>
					(311) Accommodation
				</td>
				<td>
					{{$form->ce_eyes11_acc}}D
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
		</table>
		(312) Ocular muscle balance (in prisme dioptres)
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='4'>
					Distant at 5/6 meters
				</td>
				<td colspan='4'>
					Near at 30-50 cm
				</td>				
			</tr>
			<tr>
				<td colspan='4'>
					Ortho	<p class="pull-right">{{$form->ortho_1}}</p>
				</td>
				<td colspan='4'>
					Ortho	<p class="pull-right">{{$form->ortho_2}}</p>
				</td>				
			</tr>
			<tr>
				<td colspan='4'>
					Eso	<p class="pull-right">{{$form->eso_1}}</p>
				</td>
				<td colspan='4'>
					Eso	<p class="pull-right">{{$form->eso_2}}</p>
				</td>				
			</tr>
			<tr>
				<td colspan='4'>
					Exo	<p class="pull-right">{{$form->exo_1}}</p>
				</td>
				<td colspan='4'>
					Exo	<p class="pull-right">{{$form->exo_2}}</p>
				</td>				
			</tr>
			<tr>
				<td colspan='4'>
					Hyper	<p class="pull-right">{{$form->hyper_1}}</p>
				</td>
				<td colspan='4'>
					Hyper	<p class="pull-right">{{$form->hyper_2}}</p>
				</td>				
			</tr>
			<tr>
				<td colspan='4'>
					Cyclo	<p class="pull-right">{{$form->cyclo_1}}</p>
				</td>
				<td colspan='4'>
					Cyclo	<p class="pull-right">{{$form->cyclo_2}}</p>
				</td>				
			</tr>
			<tr>
				<td colspan='4'>
					Tropia	<p class="pull-right">{{$form->tropia}}</p>
				</td>
				<td colspan='4'>
					Phoria	<p class="pull-right">{{$form->phoria}}</p>
				</td>				
			</tr>
			<tr>
				<td colspan='8'>
					Fusional Reserve Testing <p class="pull-right">{{$form->frt}}</p>
				</td>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='6'>
					(313) Colour perception
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					Pseudo-Isochromatic plates
				</td>
				<td colspan='2'>
					Type {{$form->pip_type}}
				</td>
			</tr>
			<tr>
				<td colspan='3'>
					No. of plates {{$form->pip_no_plate}}
				</td>
				<td colspan='3'>
					No. of Errors {{$form->pip_no_error}}
				</td>
			</tr>
			<tr>
				<td colspan='6'>
					Advanced colour perception testing indicated {{$form->acpt}}<br>
					Method: {{$form->acpt_method}}
				</td>
			</tr>
		</table>
	</div>
	<div class="span6">
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='3'>
					(314) Distant Vision at 5m/6m
				</td>
				<td colspan='2'>
					Spectacles
				</td>
				<td colspan='2'>
					Contact Lenses
				</td>
			</tr>
			<tr>
				<td>
					Right eye
				</td>
				<td>
					{{$form->d_r_eye}}
				</td>
				<td>
					Corrected to
				</td>
				<td colspan='2'>
					{{$form->d_r_eye_correct_s}}
				</td>
				<td colspan='2'>
					{{$form->d_r_eye_correct_cl}}
				</td>
			</tr>
			<tr>
				<td>
					Left eye
				</td>
				<td>
					{{$form->d_l_eye}}
				</td>
				<td>
					Corrected to
				</td>
				<td colspan='2'>
					{{$form->d_l_eye_correct_s}}
				</td>
				<td colspan='2'>
					{{$form->d_l_eye_correct_cl}}
				</td>
			</tr>
			<tr>
				<td>
					Both eyes
				</td>
				<td>
					{{$form->d_b_eye}}
				</td>
				<td>
					Corrected to
				</td>
				<td colspan='2'>
					{{$form->d_b_eye_correct_s}}
				</td>
				<td colspan='2'>
					{{$form->d_b_eye_correct_cl}}
				</td>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='3'>
					(315) Intermediate Vision at 1m
				</td>
				<td colspan='2'>
					Spectacles
				</td>
				<td colspan='2'>
					Contact Lenses
				</td>
			</tr>
			<tr>
				<td>
					Right eye
				</td>
				<td>
					{{$form->i_r_eye}}
				</td>
				<td>
					Corrected to
				</td>
				<td colspan='2'>
					{{$form->i_r_eye_correct_s}}
				</td>
				<td colspan='2'>
					{{$form->i_r_eye_correct_cl}}
				</td>
			</tr>
			<tr>
				<td>
					Left eye
				</td>
				<td>
					{{$form->i_l_eye}}
				</td>
				<td>
					Corrected to
				</td>
				<td colspan='2'>
					{{$form->i_l_eye_correct_s}}
				</td>
				<td colspan='2'>
					{{$form->i_l_eye_correct_cl}}
				</td>
			</tr>
			<tr>
				<td>
					Both eyes
				</td>
				<td>
					{{$form->i_b_eye}}
				</td>
				<td>
					Corrected to
				</td>
				<td colspan='2'>
					{{$form->i_b_eye_correct_s}}
				</td>
				<td colspan='2'>
					{{$form->i_b_eye_correct_cl}}
				</td>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='3'>
					(316) Near vision at 30-50 cm
				</td>
				<td colspan='2'>
					Spectacles
				</td>
				<td colspan='2'>
					Contact Lenses
				</td>
			</tr>
			<tr>
				<td>
					Right eye
				</td>
				<td>
					{{$form->n_r_eye}}
				</td>
				<td>
					Corrected to
				</td>
				<td colspan='2'>
					{{$form->n_r_eye_correct_s}}
				</td>
				<td colspan='2'>
					{{$form->n_r_eye_correct_cl}}
				</td>
			</tr>
			<tr>
				<td>
					Left eye
				</td>
				<td>
					{{$form->n_l_eye}}
				</td>
				<td>
					Corrected to
				</td>
				<td colspan='2'>
					{{$form->n_l_eye_correct_s}}
				</td>
				<td colspan='2'>
					{{$form->n_l_eye_correct_cl}}
				</td>
			</tr>
			<tr>
				<td>
					Both eyes
				</td>
				<td>
					{{$form->n_b_eye}}
				</td>
				<td>
					Corrected to
				</td>
				<td colspan='2'>
					{{$form->n_b_eye_correct_s}}
				</td>
				<td colspan='2'>
					{{$form->n_b_eye_correct_cl}}
				</td>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
				<td>
					(317) Refraction
				</td>
				<td>
					Sph
				</td>
				<td>
					Cylinder
				</td>
				<td>
					Axis
				</td>
				<td>
					Near(add)
				</td>
			</tr>
			<tr>
				<td>
					Right
				</td>
				<td>
					<p>
						{{$form->sph_r}}
					</p>
				</td>
				<td>
					<p>
						{{$form->cyl_r}}
					</p>
				</td>
				<td>
					<p>
						{{$form->axis_r}}
					</p>
				</td>
				<td>
					<p>
						{{$form->near_r}}
					</p>
				</td>
			</tr>
			<tr>
				<td>
					Left
				</td>
				<td>
					<p>
						{{$form->sph_l}}
					</p>
				</td>
				<td>
					<p>
						{{$form->cyl_l}}
					</p>
				</td>
				<td>
					<p>
						{{$form->axis_l}}
					</p>
				</td>
				<td>
					<p>
						{{$form->near_l}}
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='3'>
					Actual refraction examined	<p class="pull-right">{{$form->are}}</p>
				</td>
				<td colspan='2'>
					Spectacles prescription based	<p class="pull-right">{{$form->spb}}</p>
				</td>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
				<td>
					(318) Spectacles
				</td>
				<td>
					(319) Contact lens
				</td>
			</tr>
			<tr>
				<td>
					@if ($form->spectacles)
						Yes
					@else
						No
					@endif
				</td>
				<td>
					@if ($form->contact_lenses)
						Yes
					@else
						No
					@endif
				</td>
			</tr>
			<tr>
				<td>
					Type: <p class="pull-right">{{$form->type_spectacles}}</p>
				</td>
				<td>
					Type: <p class="pull-right">{{$form->type_contact_lenses}}</p>
				</td>
			</tr>
		</table>
		(320) Inter-ocular pressure
		<table class='table table-striped table-bordered'>
			<tr>
				<td>
					Right (mmHg)	<p class="pull-right">{{$form->iop_right}}</p>
				</td>
				<td>
					Left (mmHg)	<p class="pull-right">{{$form->iop_left}}</p>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					Method: &nbsp&nbsp{{$form->iop_method}}
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="row">
	<div class="span12">
		<p>
			(321) Ophthalmological remarks and recommendations
		</p>
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
					Ophth. Examiner's Name and Address: <p class="pull-right">{{$form->user->fname}} {{$form->user->lname}}</p><br><br>
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

