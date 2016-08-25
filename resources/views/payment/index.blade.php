@extends('wireframe.centered_style')


@section('middle')

	<div class="clearfix">&nbsp;</div>
	<h2>Payment Information</h2>
	<hr/>
	<div class="clearfix">&nbsp;</div>
	@include('payment.form')

@stop
