
@extends('layouts.app')

@section('content')
<div class="filters" style="padding:20px;">
<h5 style="font-weight: 600;"><i class="fa fa-bus"></i>Destinations</h5>
</div>

<div class="row">
	<div class="col-sm-12">

		<div class="btn-group mb-3" style="float: right">
			<a href="{{ route('destinations.create') }}"class="btn btn-sm btn-warning"><i class="fa fa-fa fa-plus" ></i> Create Destinations</a>
		</div>
	</div>
	<div class="col-sm-12">
		<table class="table table-condensed table-bordered">
		<thead style="background-color: blue">
			
			<tr><th>#</th>
				<th>From</th>
				<th>To</th>
				<th>Time</th>
				<th>Distance</th>
				<th>Cost</th>
				<th style="min-width: 100px;">Action</th>
			</tr>
		</thead>
		
		
		<tbody>
			<?php $x = ($destinations->currentpage()-1) * $destinations->perpage() +1 ?>
			@foreach($destinations as $destination)
			<tr>
				<td>{{$x}}</td>
				<td>{{$destination->from}}</td>
				<td>{{$destination->to}}</td>
				<td>{{$destination->time}}</td>
				<td>{{$destination->distance}}</td>
				<td>{{$destination->fare}}</td>
		
	<td>

  <a href="{{ route('destinations.show',$destination->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> view</a></td>
			</tr>
			<?php $x++; ?>
			@endforeach
		</tbody>
		</table>
	</div>
</div>
@endsection
