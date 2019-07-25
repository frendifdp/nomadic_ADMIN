<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_auth extends CI_Model {
                        
    public function auth(){
        session_start();

		$url = 'https://nomadian.herokuapp.com/users/login';
        $header = 
        [
        	'Content-type: application/json'
        ];
        $query = '{
            "email" : "'.$this->input->post('email').'",
            "password" : "'.$this->input->post('password').'"
        }';
        
        $context = stream_context_create(array(
            'http' => array(
            	'method' => 'POST',
            	'header' => $header,
            	'content' => $query,
            	'timeout' => 60
            )
        ));

       	$resp = @file_get_contents($url, FALSE, $context);
       	if($resp === FALSE){
            $json = 'error';
            $status = '{"status": 404, "message": "login failed"}';
       	}
       	else{
            $json = json_decode($resp, true);
            $_SESSION["token"] = $json['token'];
            $status = '{"status": 200, "message": "login success"}';
       	}
       	return $status;
    }
                        
}
                        
/* End of file M_auth.php */
    
                        