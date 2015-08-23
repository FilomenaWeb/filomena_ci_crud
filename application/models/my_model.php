<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function GetData($where = '' )
	{
		return $this->db->query("SELECT * FROM t_admin $where;");
	}

	public function InsertData($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function UpdateData($table, $data, $condition)
	{
		return $this->db->update($table, $data, $condition);
	}

	public function DeleteData($table, $array)
	{
		return $this->db->delete($table, $array);
	}

	public function SearchData()
	{
		$c = $this->input->post('cari');
		$this->db->like('nama',$c);
		return $this->db->get('t_admin');
	}

}

/* End of file my_model.php */
/* Location: ./application/models/my_model.php */