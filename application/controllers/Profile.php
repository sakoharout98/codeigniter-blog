<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function index()
    {
        $data = array(
            "title" => "Profile | codeIgniter Blog"
        );

        $this->load->view('template/header', $data);
        $this->load->view('register/index');
        $this->load->view('template/aside');
        $this->load->view('template/footer');
    }
}
