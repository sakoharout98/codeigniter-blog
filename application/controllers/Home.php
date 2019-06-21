<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = array(
            "title" => "Home | codeigniter Blog"
        );

        $this->load->view('template/header', $data);
        $this->load->view('home/index');
        $this->load->view('template/aside');
        $this->load->view('template/footer');
    }
}
