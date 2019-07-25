<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function auth()
    {
        $status = json_decode($this->M_auth->auth());
        // echo $status->status;
        if($status->status == 200){
            redirect('index.php/nomadic/guide','refresh');
        }
        else{
            redirect('index.php/nomadic/login','refresh');
        }
    }
        
}
        
    /* End of file  Login.php */
        
                            