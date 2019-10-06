<?php

class About {
	public function index($name = 'Syaqinah', $status = 'Student', $age = 22)
	{
		echo "Hye World, my name is $name, i am a $status. I am $age years old";
	}
	public function page()
	{
		echo 'About/page';
	}
}