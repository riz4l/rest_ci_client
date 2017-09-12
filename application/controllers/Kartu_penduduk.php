<?php
	defined('BASEPATH') OR exit ('no direct script access allowed');


	class Kartu_penduduk extends CI_Controller	{
		
		var $API = "";

		public function __Construct()
		{
			parent ::__Construct();

			$this->API="http://localhost/rest_ci/index.php";
			
		}

		public function index()
		{

			$this->show();
		}

		public function show()
		{
			$data['link_ktp'] = 'class="active"';
			$data['data_ktp'] = json_decode($this->curl->simple_get($this->API .'/ktp'));
			$this->load->view('header',$data);
			$this->load->view('kartu_penduduk/list',$data);
			$this->load->view('footer');
		}

		public function create()
		{
			$data['link_ktp'] = 'class="active"';
			$this->load->view('header',$data);
			$this->load->view('kartu_penduduk/create');
			$this->load->view('footer');
		}

		public function create_function()
		{

			$config = array(

					array(
							'field'=>'nik',
							'label'=>'NIK',
							'rules'=>'required|trim'
						),
					array(
							'field'=>'nama',
							'label'=>'Nama',
							'rules'=>'required|trim'
						),
					array(
							'field'=>'tempat_lahir',
							'label'=>'Tempat Lahir',
							'rules'=>'required'
						),
					array(
							'field'=>'tanggal_lahir',
							'label'=>'Tanggal Lahir',
							'rules'=>'required'
						),
					array(
							'field'=>'berlaku_hingga',
							'label'=>'Berlaku Hingga',
							'rules'=>'required'
					),
				);

			$this->form_validation->set_rules($config);

			if($this->form_validation->run()==FALSE){

				$this->create();

			}else{

				$data = array(
						'nik' => $this->input->post('nik'),
						'nama' => $this->input->post('nama'),
						'tempat_lahir' => $this->input->post('tempat_lahir'),
						'tanggal_lahir' => $this->input->post('tanggal_lahir'),
						'jenis_kelamin' => $this->input->post('jenis_kelamin'),
						'alamat' => $this->input->post('alamat'),
						'rt' => $this->input->post('rt'),
						'rw' => $this->input->post('rw'),
						'desa' => $this->input->post('desa'),
						'kecamatan' => $this->input->post('kecamatan'),
						'agama' => $this->input->post('agama'),
						'status' => $this->input->post('status'),
						'pekerjaan' => $this->input->post('pekerjaan'),
						'berlaku_hingga' => $this->input->post('berlaku_hingga'),
					);

				$insert = $this->curl->simple_post($this->API. '/ktp', $data, array(CURLOPT_BUFFERSIZE => 10));

				if(isset($insert))
				{
						$this->session->set_flashdata('sukses','insert data sukses');
				}else{
						$this->session->set_flashdata('gagal','insert data gagal');
				}
				redirect('kartu_penduduk/create');
				}

		}

		public function edit()
		{
				$data['link_ktp'] = 'class="active"';
				$params = array('nik'=>  $this->uri->segment(3));
	            $data['data_ktp'] = json_decode($this->curl->simple_get($this->API.'/ktp',$params));
	            $this->load->view('header',$data);
	            $this->load->view('kartu_penduduk/edit',$data);
	            $this->load->view('footer');
		}

		public function edit_function()
		{
			$config = array(

					array(
							'field'=>'nik',
							'label'=>'NIK',
							'rules'=>'required|trim'
						),
					array(
							'field'=>'nama',
							'label'=>'Nama',
							'rules'=>'required|trim'
						),
					array(
							'field'=>'tempat_lahir',
							'label'=>'Tempat Lahir',
							'rules'=>'required'
						),
					array(
							'field'=>'tanggal_lahir',
							'label'=>'Tanggal Lahir',
							'rules'=>'required'
						),
					array(
							'field'=>'berlaku_hingga',
							'label'=>'Berlaku Hingga',
							'rules'=>'required'
					),
			);

			$this->form_validation->set_rules($config);

			if($this->form_validation->run()==FALSE){

				redirect('kartu_penduduk/edit/'.$_POST['nik']);

			}else{

				$data = array(
						'nik' => $this->input->post('nik'),
						'nama' => $this->input->post('nama'),
						'tempat_lahir' => $this->input->post('tempat_lahir'),
						'tanggal_lahir' => $this->input->post('tanggal_lahir'),
						'jenis_kelamin' => $this->input->post('jenis_kelamin'),
						'alamat' => $this->input->post('alamat'),
						'rt' => $this->input->post('rt'),
						'rw' => $this->input->post('rw'),
						'desa' => $this->input->post('desa'),
						'kecamatan' => $this->input->post('kecamatan'),
						'agama' => $this->input->post('agama'),
						'status' => $this->input->post('status'),
						'pekerjaan' => $this->input->post('pekerjaan'),
						'berlaku_hingga' => $this->input->post('berlaku_hingga'),
					);

				$update = $this->curl->simple_put($this->API. '/ktp', $data, array(CURLOPT_BUFFERSIZE => 10));

				if($update)
		        {
		                $this->session->set_flashdata('sukses','Update Data Berhasil');
		        }else{
		               $this->session->set_flashdata('gagal','Update Data Gagal');
		        }
		       redirect('kartu_penduduk/edit/'.$_POST['nik']);
	    	}

		}

		public function delete($id)
		{
			if(empty($id)){
	            redirect('kartu_penduduk');
	        }else{
	            $delete =  $this->curl->simple_delete($this->API.'/ktp', array('nik'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
	            if($delete)
	            {
	                $this->session->set_flashdata('sukses','Delete Data Berhasil');
	            }else
	            {
	               $this->session->set_flashdata('gagal','Delete Data Gagal');
	            }
	            redirect('kartu_penduduk');
	        }
		}

	}