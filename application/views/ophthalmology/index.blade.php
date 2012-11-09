@layout('layout_master')

@section('content')
	<h1>Ophthalmology<small>Completed Forms</small></h1>
	<br>
	<table class='table table-striped table-bordered'>
		<thead>
		  <tr>
		    <th>Form ID.</th>
		    <th>Name of Examiner</th>
		    <th>Created At</th>
		    <th>Actions</th>
		  </tr>
		</thead>
		<tbody>
			@if (isset($forms))
				@foreach ($forms as $form)
				  <tr>
				    <td>{{$form->id}}</td>
				    <td>{{$form->user->lname}}</td>
				    <td>{{ $form->created_at }}</td>
				    <td>
				    	<div class='btn-group'>
				    		{{	HTML::link_to_action('ophthalmologies@show', 'Show', array($form->id))}}
				    		{{	HTML::link_to_action('ophthalmologies@edit', 'Edit', array($form->id))}}
				    		{{	HTML::link_to_action('ophthalmologies@destroy', 'Delete', array($form->id))}}
						</div>
				    </td>
				  </tr>
				@endforeach
			@else
				<tr>
					<td colspan='4'> <strong>No Recorded Exams</strong> </td>
				</tr>
			@endif
		</tbody>
	</table>
	{{	HTML::link_to_action('ophthalmologies@new', 'Add New', array($patient->id, 'authId'=>$user_id))}}
	<p>
	</p>

	<div class="row">
	Applicant's Details
	<div class="span12">
		<table class='table table-striped table-bordered'>
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
				<td colspan='4'>
					(10) Nationality
				</td>
				<td colspan='4'>
					(11) Type of License desired:
				</td>
			</tr>
			<tr>
				<td colspan='12'>
					(301) Consent to release of medical information: I hereby authorize the release of all information contained in this report and any or all attachments to the Aeromedical Examiner, the Authority and where necessary the Aeromedical section of another State, recognising that these documents, or any other electronically stored data are to be used for completion of a medical assessment and will become and remain the property of the Authority, providing that I or my physician may have access to them according to national law. Medical Confidentiality will be respected at all times: <br><br><br>
					<p ckass>Date:______________________________ Signature of the applicant:_____________________ Signature of medical examiner(witness)</p>
				</td>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
				<td colspan='1'>
					(302) Examination Category
				</td>
				<td colspan='10' rowspan='5'>
					(303) Ophthalmological History
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
		</table>
	</div>
</div>
<div class="row">
	<div class="span6 left">
		<table class='table table-striped table-bordered'>
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
		<table class='table table-striped table-bordered'>
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
		<table class='table table-striped table-bordered'>
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
		<table class='table table-striped table-bordered'>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
			<tr>
			</tr>
		</table>
		<table class='table table-striped table-bordered'>
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
@endsection


