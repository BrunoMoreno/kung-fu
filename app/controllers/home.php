<?php 


class Home extends Controller
{

	public function index()
	{
		$template = $this->loadView('home');
		$template->render();
	}

}