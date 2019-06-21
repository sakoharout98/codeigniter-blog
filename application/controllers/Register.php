<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function index()
    {
        $data = array(
            "title" => "Register | codeIgniter Blog"
        );

        $this->load->view('template/header', $data);
        $this->load->view('register/index');
        $this->load->view('template/aside');
        $this->load->view('template/footer');
    }
}
