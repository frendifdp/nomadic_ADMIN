<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Nomadic extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_get');
    }

    public function index()
    {
        $this->load->view('content');
    }

    public function login()
    {
        $this->load->view('login');   
    }

    public function package()
    {
        $data['table'] = $this->M_get->package();
        $this->load->view('package', $data);
    }

    public function guide()
    {
        $data['table'] = $this->M_get->guide();
        $this->load->view('guide', $data);
        // echo json_encode($data['table']);
    }

    public function destination()
    {
        $data['table'] = $this->M_get->desination();
        $this->load->view('destination', $data);
    }

}
        
                            