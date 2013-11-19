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
			'id'      => '0',
	        'title'   => 'james test',
	        'author'  => array( 'name' => 'james cowie' ),
	        'date'    => '12-27-2012',
	        'excerpt' => 'This is a test post',
	        'body'    => 'This is more of the body content that should be show'
		),array(
			'id'      => '1',
			'title'   => 'Hello World',
			'author'  => array( 'name' => 'James Cowie'),
			'date'    => '18-11-2013',
			'excerpt' => 'Hello world, this is a test with ember.js and <strong>Laravel</strong>',
			'body'    => 'this is the remainder of the content that I want to be displayed within the application'
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
		$id = Input::get('id');

		$data = array(array(
			'id'      => '0',
	        'title'   => 'james test',
	        'author'  => array( 'name' => 'james cowie' ),
	        'date'    => '12-27-2012',
	        'excerpt' => 'This is a test post',
	        'body'    => 'This is more of the body content that should be show'
		),array(
			'id'      => '1',
			'title'   => 'Hello World',
			'author'  => array( 'name' => 'James Cowie'),
			'date'    => '18-11-2013',
			'excerpt' => 'Hello world, this is a test with ember.js and <strong>Laravel</strong>',
			'body'    => 'this is the remainder of the content that I want to be displayed within the application'
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