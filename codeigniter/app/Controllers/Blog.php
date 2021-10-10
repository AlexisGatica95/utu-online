<?php namespace App\Controllers;

class Blog extends BaseController
{
	
	public function shop()
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

	

}
