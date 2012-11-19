@layout('layout_master')

@section('content')
	<h1>Otorhinolaryngology<small>Completed Forms</small></h1>
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
				    		{{	HTML::link_to_action('otorhinolaryngologies@show', 'Show', array($form->id))}}
				    		{{	HTML::link_to_action('otorhinolaryngologies@edit', 'Edit', array($form->id))}}
				    		{{	HTML::link_to_action('otorhinolaryngologies@destroy', 'Delete', array($form->id))}}
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
	{{	HTML::link_to_action('otorhinolaryngologies@new', 'Add New', array($patient->id, 'authId'=>$user_id))}}
	<p>
	</p>
@endsection