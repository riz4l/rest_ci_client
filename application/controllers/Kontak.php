<?php
	defined('BASEPATH') OR exit('no direct script access allowed');

	class Kontak Extends CI_Controller	{

		var $API ="";

		public function __Construct()
		{
			parent ::__Construct();
			$this->API="http://localhost/rest_ci/index.php";
	        $this->load->library('session');
	        $this->load->library('curl');
	        $this->load->helper('form');
	        $this->load->helper('url');
		}

		//menampilkan data kontak
		public function index()
		{
			$data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak'));
			$this->load->view('kontak/list',$data);
		}

		//insert data kontak
		public function create()
		{
			if(isset($_POST['submit'])){

				$data = array(
							'id' => $this->input->post('id'),
							'nama' => $this->input->post('nama'),
							'nomor' => $this->input->post('nomor')
					);
				$insert = $this->curl->simple_post($this->API. '/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));
			
				if(isset($insert))
				{
					$this->session->set_flashdata('hasil','insert data sukses');
				}else{
					$this->session->set_flashdata('gagal','insert data gagal');
				}
				redirect('kontak');

			}else{
				$this->load->view('kontak/create');
			}
		}

		//edit data kontak
		function edit(){
	        if(isset($_POST['submit'])){
	            $data = array(
	                'id'       =>  $this->input->post('id'),
	                'nama'      =>  $this->input->post('nama'),
	                'nomor'=>  $this->input->post('nomor'));
	            $update =  $this->curl->simple_put($this->API.'/kontak', $data, array(CURLOPT_BUFFERSIZE => 10)); 
	            if($update)
	            {
	                $this->session->set_flashdata('hasil','Update Data Berhasil');
	            }else
	            {
	               $this->session->set_flashdata('hasil','Update Data Gagal');
	            }
	            redirect('kontak');
	        }else{
	            $params = array('id'=>  $this->uri->segment(3));
	            $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak',$params));
	            $this->load->view('kontak/edit',$data);
	        }
	    }

	    // delete data kontak
	    function delete($id){
	        if(empty($id)){
	            redirect('kontak');
	        }else{
	            $delete =  $this->curl->simple_delete($this->API.'/kontak', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
	            if($delete)
	            {
	                $this->session->set_flashdata('hasil','Delete Data Berhasil');
	            }else
	            {
	               $this->session->set_flashdata('hasil','Delete Data Gagal');
	            }
	            redirect('kontak');
	        }
	    }
	}