<?php

class About {
	public function index($name = 'Syaqinah', $status = 'Student', $age = 22)
	{
		$this->view('about/index');
	}
	public function page()
	{
		$this->view('about/page');
	}
}