<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Carbon\Carbon, Input, GuzzleHttp\Client, Redirect;

class PayController extends Controller
{
	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index()
	{
		return view('payment.index');
	}

	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function post()
	{
		$array_of_pay	= Input::only('refnumber', 'amount', 'method', 'date');

		$http 			= new Client;

		$response 		= $http->post('http://localhost:2221/payments', ['form_params' => $array_of_pay]);

		return Redirect::route('paying.toys');
	}
}