<?php

class Mahasiswa_model {
	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}


	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function addMahasiswaData($data)
	{
		$query = "INSERT INTO mahasiswa
					VALUES
				  ('', :name, :matric, :email, :course)";
		
		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('matric', $data['matric']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('course', $data['course']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteMahasiswaData ($id)
	{
		$query = "DELETE FROM mahasiswa WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function editMahasiswaData($data)
	{
		$query = "UPDATE mahasiswa SET
					name = :name,
					matric = :matric,
					email = :email,
					course = :course
				  WHERE id = :id";
		
		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('matric', $data['matric']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('course', $data['course']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function searchDataMahasiswa()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM mahasiswa WHERE name LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}

}