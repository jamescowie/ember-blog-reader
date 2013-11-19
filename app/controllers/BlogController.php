<?php

class BlogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// craft some JSON here that can be passed back to the front end.
		$data = array(array(
			'id'      => '1',
	        'title'   => 'james test',
	        'author'  => array( 'name' => 'james cowie' ),
	        'date'    => '12-27-2012',
	        'excerpt' => 'This is a test post',
	        'body'    => 'This is more of the body content that should be show'
		));

		echo json_encode(array('posts' => $data));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// TODO Replace with a valid DB select
		$data = array(array(
			'id'      => '1',
	        'title'   => 'james test',
	        'author'  => array( 'name' => 'james cowie' ),
	        'date'    => '12-27-2012',
	        'excerpt' => 'This is a test post',
	        'body'    => 'This is more of the body content that should be show'
		));

		echo json_encode(array('post' => $data));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}