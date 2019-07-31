<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// date_default_timezone_set('Asia/Seoul');

class Service extends CI_Controller {
	function __construct()
    {       
        parent::__construct();
        $this->load->database();
         $this->load->helper("url");
        $this->load->model("member_model");
        // $this->load->model("matching_model");
        if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			include 'log.php';
		}
    }
	public function index()
	{
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$this->load->view("service",array("id"=>$id,"division"=>$division,"url"=>$url));
	}

}


?>