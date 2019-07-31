<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// date_default_timezone_set('Asia/Seoul');

class Main extends CI_Controller {
	function __construct()
    {       
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");
        $this->load->model("member_model");
        $this->load->model("main_model");
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
		}
		$por_result = $this->main_model->portfoilo_top_list();
		// var_dump($por_result);
		// echo $por_result[0]->num;
		$this->load->view('index',array("id"=>$id,"port"=>$por_result,"url"=>$url));
	}

}


?>