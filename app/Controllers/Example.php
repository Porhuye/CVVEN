<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Exemple avec CodeIgniter';
        $this->load->view('example_view', $data);
    }

    public function hello()
    {
        echo "Hello, World!";
    }

}
