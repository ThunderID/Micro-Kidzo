@extends('wireframe.centered_style')


@section('middle')

	<div class="clearfix">&nbsp;</div>
	<h2>Payment Information</h2>
	<hr/>
	<div class="clearfix">&nbsp;</div>
	{!! Form::open(['url' => route('paying.toys'), 'class' => 'hollow-login', 'method' => 'POST']) !!}
		@include('payment.form')
	{!!Form::close()!!}

@stop
