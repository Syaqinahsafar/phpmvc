<?php 

class App {
	public function __construct()
	{
		$url = $this->parseURL();
		var_dump($url);
	}

	public function parse_url()
	{

		if(isset($ GET['url'])) {
			$url = $ GET['url'];
			return $url;
		}
	}

} 