<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo view('admin/templates/header');
		echo view('admin/productos');
		echo view('admin/templates/footer');
	}


}