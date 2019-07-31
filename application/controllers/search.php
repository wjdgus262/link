<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// date_default_timezone_set('Asia/Seoul');

class Search extends CI_Controller {
	function __construct()
    {       
        parent::__construct();
        $this->load->database();
         $this->load->helper("url");
        $this->load->model("member_model");
        $this->load->model("search_model");
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
		$keyward = $this->input->get("keyward");
		$result = $this->search_model->get_search($keyward);
		// var_dump($result);
		// echo $result['port'][0]->num;
		// echo $keyward;

		$this->load->view("search",array("id"=>$id,"division"=>$division,"url"=>$url,"result"=>$result));
	}
}


?>