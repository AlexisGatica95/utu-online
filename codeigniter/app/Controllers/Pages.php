<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		// $model = new BlogModel();
		// $locale = $this->request->getLocale();

		// $data['news'] = $model->getPosts();
		// $data['locale'] = $locale;

		// return view('welcome_message');
        // echo view('templates/header',$data);
        echo view('templates/header');
		echo view('pages/shop');
		echo view('templates/footer');
	}


	//--------------------------------------------------------------------

}
