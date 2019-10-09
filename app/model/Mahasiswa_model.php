<?php

class Mahasiswa_model {
	// private $mhs = [
	// 	[
	// 		"name" => "Syaqinah Safaruddin",
	// 		"matric" => "253405",
	// 		"email" => "syaqinahsafar23@gmail.com",
	// 		"course" => "Information Technology",
	// 	],
	// 	[
	// 		"name" => "Amiera Syazlin",
	// 		"matric" => "253920",
	// 		"email" => "amierasyazlin97@gmail.com",
	// 		"course" => "Information Technology",
	// 	],
	// 	[
	// 		"name" => "Maizatul Fatihah",
	// 		"matric" => "252605",
	// 		"email" => "maizatulfatihah@ymail.com",
	// 		"course" => "Information Technology",
	// 	]
	// ];

	private $dbh; // database handler
	private $stmt;

	public function __construct()
	{
		// data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try {
			$this->dbh = new PDO($dsn, 'root', '');
		} catch (PDOException $e){
			die($e->getMessage());
		}
	}

	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}