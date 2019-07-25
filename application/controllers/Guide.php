<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Guide extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_guide');
    }
    
    public function post()
    {
        $this->M_guide->post();
        redirect('index.php/nomadic/guide','refresh');
    }
    public function put()
    {
        $this->M_guide->put();
        redirect('index.php/nomadic/guide','refresh');
    }

    public function del($id)
    {
        $this->M_guide->delete($id);
        redirect('index.php/nomadic/guide','refresh');
    }

    public function delete($id)
    {
        echo "<script>
          var r = confirm('Press a button!');
          if (r == true) {
            window.location.href = '".base_url('index.php/guide/del/'.$id)."'
          } else {
            window.location.href = '".base_url('index.php/nomadic/guide/')."'
          }
        </script>";
    }

    public function edit($id)
    {
        $data['data'] = $this->M_guide->getTour($id);
        $this->load->view('guide_edit', $data);
    }
        
}
        
    /* End of file  Guide.php */
        
                            