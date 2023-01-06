<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	

	public function DataAdmin()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_login','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            		$data['detail']['username']= $tampil->username;
            		$data['detail']['password']= $tampil->password;
			$data['content']='VFormUpdateAdmin';
		}
		else
		{	
			$data['DataAdmin']=$this->MSudi->GetData('tbl_login');
			$data['content']='VAdmin';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddAdmin()
	{
		$data['content']='VFormAddAdmin';
		$this->load->view('VBackend',$data);
	}
	public function AddDataAdmin()
	{
		 $add['nis']=$this->input->post('txt_nis');
         	 $add['username']= $this->input->post('txt_username');
         	 $add['password']= $this->input->post('txt_password');  
        	 $this->MSudi->AddData('tbl_login',$add);
        	 redirect(site_url('Welcome/DataAdmin'));
	}



	public function UpdateDataAdmin()
	{
		 $nis=$this->input->post('txt_nis');
		 $update['username']= $this->input->post('txt_username');
         	 $update['password']= $this->input->post('txt_password');
          	 $this->MSudi->UpdateData('tbl_login','nis',$nis,$update);
		 redirect(site_url('Welcome/DataAdmin'));
	}


	public function DeleteDataAdmin()
	{
		 $nis=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_login','nis',$nis);
        	 redirect(site_url('Welcome/DataAdmin'));
	}




	public function DataWarga()
	{

		if($this->uri->segment(4)=='view')
		{
			$id_warga=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_warga','id_warga',$id_warga)->row();
			$data['detail']['id_warga']= $tampil->id_warga;
            		$data['detail']['nama']= $tampil->nama;
					$data['detail']['nik']= $tampil->nik;
            		$data['detail']['alamat']= $tampil->alamat;
					$data['detail']['email']= $tampil->email;
					$data['detail']['password']= $tampil->password;
			$data['content']='VFormUpdateWarga';
		}
		else
		{	
			$data['DataWarga']=$this->MSudi->GetData('tbl_warga');
			$data['content']='VWarga';
		}


		$this->load->view('VBackend',$data);
	}

	public function VFormAddWarga()
	{
		$data['content']='VFormAddWarga';
		$this->load->view('VBackend',$data);
	}
	public function AddDataWarga()
	{
		 $add['id_warga']=$this->input->post('txt_id_warga');
         	 $add['nama']= $this->input->post('txt_nama');
         	 $add['nik']= $this->input->post('txt_nik'); 
			  $add['alamat']= $this->input->post('txt_alamat');  
			  $add['email']= $this->input->post('txt_email');
			  $add['password']= $this->input->post('txt_password');     
        	 $this->MSudi->AddData('tbl_warga',$add);
        	 redirect(site_url('Welcome/DataWarga'));
	}



	public function UpdateDataWarga()
	{
		 $id_warga=$this->input->post('txt_id_warga');
		 $update['nama']= $this->input->post('txt_nama');
		 $update['nik']= $this->input->post('txt_nik');
		 $update['alamat']= $this->input->post('txt_alamat');
		 $update['email']= $this->input->post('txt_email');
		 $update['password']= $this->input->post('txt_password');
		
          	 $this->MSudi->UpdateData('tbl_warga','id_warga',$id_warga,$update);
		 redirect(site_url('Welcome/DataWarga'));
	}


	public function DeleteDataWarga()
	{
		 $id_warga=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_warga','id_warga',$id_warga);
        	 redirect(site_url('Welcome/DataWarga'));
	}
	
	
	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}
}
