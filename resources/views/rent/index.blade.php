@extends('wireframe.tee_style')

@section('full')
	
	{!! Form::open(['url' => route('renting.toys'), 'class' => 'hollow-login', 'method' => 'POST']) !!}
	<h2>Items</h2>
	@include('toys.form')

@stop

@section('left')

	<h2>Billing Information</h2>
	<hr/>
	@include('customer.form')

@stop

@section('right')

	<h2>Shipping Address</h2>
	<hr/>
	@include('shipping.form')
	{!!Form::close()!!}
	
@stop