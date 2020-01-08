@extends('layouts.app')

@section('content')
<div class="filters" style="padding:20px;">
<h5 style="font-weight: 600;"><i class="fa fa-bus"></i>CREATE DESTINATION</h5>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="card mt-3">
			<div class="card-body">
		<form action="{{ route('destinations.store') }}" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<label>From</label>
				<input type="text" name="from" class="form-control">
			</div>
			<div class="form-group">
				<label>To</label>
				<input type="text" name="to" class="form-control">
			</div>
		
			<div class="form-group">
				<label>Time</label>
				<input type="text" name="time" class="form-control">
			</div>
			<div class="form-group">
				<label>Distance</label>
				<input type="text" name="distance" class="form-control">
			</div>
			<div class="form-group">
				<label>Cost</label>
				<input type="text" name="fare" class="form-control">
			</div>
			<button type="submit" class="btn btn-sm btn-success btn-block"  style="background-color: blue">CREATE DESTINATION</button>
		</form>
	</div>
</div>
	</div>
</div>
@endsection
