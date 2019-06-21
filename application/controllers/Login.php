<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $data = array(
            "title" => "Login | codeIgniter Blog"
        );

        $this->load->view('template/header', $data);
        $this->load->view('login/index');
        $this->load->view('template/aside');
        $this->load->view('template/footer');
    }
}
