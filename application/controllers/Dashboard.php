<?php
	defined('BASEPATH') OR exit ('no direct script access allowed');


	class Dashboard extends CI_Controller	{
		
		public function __Construct()
		{
			parent ::__Construct();

			
		}

		public function index()
		{
			$data['link_dashboard'] = 'class="active"';
			$this->load->view('header',$data);
			$this->load->view('dashboard');
			$this->load->view('footer');
		}

	}