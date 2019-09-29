<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koneksi extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/overview');
	}
// code menuju ke insert data
	public function insert($mobil){
		$where="where idMOBIL=$mobil";
		$mobil=$this->model->getX('mobil',$where);
		$kota=$this->model->getX('kota','');
		$this->load->view('formComplaint',array('kota'=>$kota,'mobil'=>$mobil));
	}
// code tampilkan data 
		public function mydata($hasil){
		$data= $this->model->getData('complaint');
		$this->load->view('mydata',array('data'=>$data));
	}
// code insert
	public function do_insert(){
        $name = $this->input->post('name');
		$email = $this->input->post('email');
		$complaint = $this->input->post('complaint');
		$dataInsert= array(
            'COMPLAINT'=> $complaint,
            'EMAIL'=> $email,
			'NAME'=> $name

		);
		$res=$this->model->insertData('complaint',$dataInsert);
		if($res>=1){
			echo "<h2>Berhasil Dimasukkan</h2>";
		}else{
			echo "<h2>Gagal Dimasukkan</h2>";	
		}
		header('Location: http://localhost/project/index.php/Koneksi/mydata/hasil');
	}

// code update
	// public function do_update(){
	// 	$dataInsert= array(
	// 		'KTP'=> $_POST["ktp"],
	// 		'NAMA'=> $_POST["nama"],
	// 		'TELP'=> $_POST["telp"],
	// 		'EMAIL'=> $_POST["email"],
	// 		'KOTA_idKOTA'=> $_POST["kota"],
	// 		'MOBIL_idMOBIL'=> $_POST["mobil"]
	// 	);
	// 	$where= array('KTP'=>$_POST["ktp"]);
	// 	$res=$this->model->updateData('biodata',$dataInsert,$where);
	// 	if($res>=1){
	// 		echo "<h2>Berhasil Dimasukkan</h2>";
	// 	}else{
	// 		echo "<h2>Gagal Dimasukkan</h2>";	
	// 	}
	// 		header('Location: http://localhost/project/index.php/Welcome/mydata/hasil');
	// }

// code delete
	// public function delete($KTP)
	// {
	// 	$data= array ('KTP'=>$KTP);
	// 	$res=$this->model->delete('biodata',$data);
	// 	header('Location: http://localhost/project/index.php/Welcome/mydata/hasil');
	// }

	// public function edit($KTP)
	// {
	// 	$mobil=$this->model->getX('mobil','');
	// 	$kota=$this->model->getX('kota','');
	// 	$where="where `KTP`=$KTP";
	// 	$data= $this->model->getX('biodata',$where);
	// 	$this->load->view('edit',array('data'=>$data,'mobil'=>$mobil,'kota'=>$kota));
	// }


}
