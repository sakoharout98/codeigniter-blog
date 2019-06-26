<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = array(
            "title" => "Home | codeigniter Blog",
            "blogPosts"=>
                array(
                    array(
                        'link' => "blog.html",
                        'img' => "assets/images/blog-1.jpg",
                        'category' => "sako",
                        'title' => "Armenia is peaceful place",
                        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam",
                        'author' => "Poghos",
                        'date' => "February 12, 2019"
                    ),
                    array(
                        'link' => "blog.html",
                        'img' => "assets/images/abc.jpg",
                        'category' => "craft",
                        'title' => "wooden table is beautiful",
                        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
                        'author' => "Rubel",
                        'date' => "February 10, 2019"
                    ),
                    array(
                        'link' => "blog.html",
                        'img' => "assets/images/blog-2.jpg",
                        'category' => "Lifestyle",
                        'title' => "Small work station",
                        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
                        'author' => "Rubel",
                        'date' => "February 12, 2018"
                    ),
                    array(
                        'link' => "blog.html",
                        'img' => "assets/images/blog-3.jpg",
                        'category' => "Mission",
                        'title' => "Waiting to launch on the sky",
                        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
                        'author' => "Rubel",
                        'date' => "February 12, 2018"
                    ),
                    array(
                        'link' => "blog.html",
                        'img' => "assets/images/blog-4.jpg",
                        'category' => "Cloth",
                        'title' => "A day labour wore jeans",
                        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
                        'author' => "Rubel",
                        'date' => "February 12, 2018"
                    ),
                )

        );


        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/aside');
        $this->load->view('template/footer');
    }
}
