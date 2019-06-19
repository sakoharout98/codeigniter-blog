<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('login/index');
        $this->load->view('templates/aside');
        $this->load->view('templates/footer');
	}
}
