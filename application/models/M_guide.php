<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class M_guide extends CI_Model {
                        
    public function post(){
        $url = 'https://nomadian.herokuapp.com/tourGuide/register';
        $header = 
        [
            'Content-type: application/json',
            'Authorization: Bearer '.$_SESSION['token']
        ];
        $query = '{
            "name" : "'.$this->input->post('guide_name').'",
            "email" : "'.$this->input->post('guide_email').'",
            "phone" : "'.$this->input->post('guide_phone').'",
            "password" : "'.$this->input->post('guide_password').'",
            "age" : "'.$this->input->post('guide_age').'",
            "address" : "'.$this->input->post('guide_address').'",
            "skill" : "'.$this->input->post('guide_abilities').'",
            "gender" : "'.$this->input->post('guide_gender').'",
            "photo" : "image.jpg",
            "status" : 1
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
            $status = '{"status": 404}';
       	}
       	else{
            $json = json_decode($resp, true);
            $status = '{"status": 200}';
       	}
       	return $status;       
                                    
    }

    public function put(){
        $id = $this->input->post('id');
        $url = 'https://nomadian.herokuapp.com/tourGuide/'.$id;
        $header = 
        [
            'Content-type: application/json',
            'Authorization: Bearer '.$_SESSION['token']
        ];
        $query = '{
            "name" : "'.$this->input->post('guide_name').'",
            "email" : "'.$this->input->post('guide_email').'",
            "phone" : "'.$this->input->post('guide_phone').'",
            "age" : "'.$this->input->post('guide_age').'",
            "address" : "'.$this->input->post('guide_address').'",
            "skill" : "'.$this->input->post('guide_abilities').'",
            "gender" : "'.$this->input->post('guide_gender').'",
            "photo" : "image.jpg",
            "status" : 1
        }';
        
        $context = stream_context_create(array(
            'http' => array(
            	'method' => 'PUT',
            	'header' => $header,
            	'content' => $query,
            	'timeout' => 60
            )
        ));

       	$resp = @file_get_contents($url, FALSE, $context);
       	if($resp === FALSE){
            $json = 'error';
            $status = '{"status": 404}';
       	}
       	else{
            $json = json_decode($resp, true);
            $status = '{"status": 200}';
       	}
       	return $status;       
                                    
    }

    public function delete($id){
        $url = 'https://nomadian.herokuapp.com/tourGuide/'.$id;
        $header = 
        [
            'Content-type: application/json',
            'Authorization: Bearer '.$_SESSION['token']
        ];
        
        $context = stream_context_create(array(
            'http' => array(
            	'method' => "DELETE",
            	'header' => $header,
            	'timeout' => 60
            )
        ));

       	$resp = @file_get_contents($url, FALSE, $context);
       	if($resp === FALSE){
            $json = 'error';
            $status = '{"status": 404}';
       	}
       	else{
            $json = json_decode($resp, true);
            $status = '{"status": 200}';
       	}
       	return $status;
    }

    public function getTour($id)
    {
        $url = 'https://nomadian.herokuapp.com/tourGuide/'.$id;
        $header = 
        [
            'Content-type: application/json',
            'Authorization: Bearer '.$_SESSION['token']
        ];
        
        $context = stream_context_create(array(
            'http' => array(
            	'method' => 'GET',
            	'header' => $header,
            	'timeout' => 60
            )
        ));

       	$resp = @file_get_contents($url, FALSE, $context);
       	if($resp === FALSE){
            $json = '{"data": 400}';
       	}
       	else{
            $json = json_decode($resp, true);
        }
           
       	return $json['data'];
    }
}
                        
/* End of file M_guide.php */
    
                        