<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {

        $this->load->view('templates/header');
        $this->load->view('register/index');
        $this->load->view('templates/aside');
        $this->load->view('templates/footer');
    }
}
