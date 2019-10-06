<?php

class About extends Controller {
	public function index($name = 'Syaqinah', $status = 'Student', $age = 22)
	{
		$data['name'] = $name;
		$data['status'] = $status;
		$data['age'] = $age;
		
		$this->view('about/index', $data);
	}
	public function page()
	{
		$this->view('about/page');
	}
}