@extends('layouts.app')

@section('content')
<div class="filters" style="padding:20px;">
<h5 style="font-weight: 600;"><i class="fa fa-plus"></i> Edit user</h5>
</div>
<div class="row">
	<div class="col-sm-4">
		<div class="card mt-3">
			<div class="card-body">
		<form action="/user" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="{{$user->password}}">
			</div>
			<div class="form-group">
				<label>Email address</label>
				<input type="email" name="email" class="form-control" value="{{$user->email}}">
			</div>
			<div class="form-group">
				<label>Password <small>(Leave blank to retain old password)</small></label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				@if($user->is_admin == 1)
				<input type="hidden" value="0" name="is_admin">
				<input class="form-check-input" type="checkbox" value="1" name="is_admin" style="margin: 0px;" checked="checked">
				@else
				<input class="form-check-input" type="checkbox" value="1" name="is_admin" style="margin: 0px;">
				@endif
				<label style="margin-left: 20px;">is admin</label>
			</div>
			<button type="submit" class="btn btn-sm btn-success btn-block"> UPDATE USER</button>
		</form>
	</div>
</div>
	</div>
</div>
@endsection
