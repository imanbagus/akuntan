<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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

	 public function register() 
	 {
	 
	  return View::make('regis'); 
	 }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$user = new User();
		$user->firstname = Input::get('firstname');
		$user->lastname  = Input::get('lastname');
		$user->email     = Input::get('email');
		$user->password  = Hash::make(Input::get('password'));

		$user->save();

		return Redirect::to('login')->with('pesan', 'Registrasi berhasil!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	public function login()
	{
		//
		return View::make('login');
	}

	public function authenticate()
	{
		//
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
		    return Redirect::to('index');
		}

		else{
		  return Redirect::to('login')->with('pesan_error', 'Login gagal, email atau password salah!');
			}
	}

	  public function logout()
	   {
	   Auth::logout();
	   return Redirect::to('login')->with('pesan_logout', 'berhasil logout');
		}

		

}
