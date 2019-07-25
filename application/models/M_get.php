<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class M_get extends CI_Model {
    public function package(){
        $url = 'https://nomadian.herokuapp.com/packages';
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

    public function guide(){
        $url = 'https://nomadian.herokuapp.com/tourGuide';
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
        
        // $newarr = Array();
        // $i = 0;
        // $j = 0;
        // foreach($json['data'] as $row){
        //     $temp = Array();
        //     $temp[$i]['id'] = $row['id'];
        //     $temp[$i]['guide_name'] = $row['guide_name'];
        //     $temp[$i]['guide_email'] = $row['guide_email'];
        //     $temp[$i]['guide_phone'] = $row['guide_phone'];
        //     $temp[$i]['guide_address'] = $row['guide_address'];
        //     $temp[$i]['guide_age'] = $row['guide_age'];
        //     $temp[$i]['guide_gender'] = $row['guide_address'] == 'L' ? 'Male' : 'Female';
        //     $temp[$j]['skill'] = '';
        //     if($temp[$i]['id'] == $row['id']){
        //         $temp[$j]['skill'] = $temp[$j]['skill'].', '.$row['skill'];
        //     }
        //     else{
        //         $i++;
        //     }
        //     $newarr[] = $temp;
        // }

       	return $json['data'];
    }

    public function destination(){  
        $url = 'https://nomadian.herokuapp.com/destination';
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
                        
/* End of file M_get.php */
    
                        