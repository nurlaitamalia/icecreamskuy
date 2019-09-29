<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    public function getData($tabel)
	{
		$data= $this->db->query("SELECT * FROM $tabel");
		return $data->result_array();
	}
	public function getX($tabel,$where)
	{
		$sql = "SELECT * FROM $tabel $where";
		$data= $this->db->query($sql);
		return $data->result_array();
	}
	public function updateData($datatable,$data,$where)
	{
		$res=$this->db->update($datatable,$data,$where);
		return $res;
	}
	public function insertData($datatable,$data){
		$res=$this->db->insert($datatable,$data);
		return $res;
	}

	public function delete($datatable,$data){
		$res=$this->db->delete($datatable,$data);
		return $res;
	}
}
?>
