<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Carbon\Carbon, Input, GuzzleHttp\Client, Redirect;

class RentController extends Controller
{
	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index()
	{
		return view('rent.index');
	}

	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function post()
	{
		$period 		= count(array_unique(Input::get('period')));

		$array_of_rent	= 	[
								'id'			=> '',
								'ref_number'	=> 'K'.Carbon::now()->format('YmdHis'),
								'issued_at'		=> Carbon::now()->format('Y-m-d H:i:s'),
								'issued_by'		=> 1,
								'company_id'	=> 1,
								'customer_id'	=> 1,
								'due_at'		=> Carbon::now()->addDays(3)->format('Y-m-d H:i:s'),
							];

		$array_of_rent['goods']		= Input::get('item');
		$array_of_rent['services']	= 	[[
											'service_id'	=> 1,
											'price'			=> $period * 50000,
											'discount'		=> 0
										]];

		$http 			= new Client;

		$response 		= $http->post('http://localhost/micro-billing/public/billings', ['form_params' => $array_of_rent]);
dd(json_decode($response->getBody(), true));
		return Redirect::route('rent.toys');
	}
}