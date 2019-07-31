<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// date_default_timezone_set('Asia/Seoul');

class Matching extends CI_Controller {
	function __construct()
    {       
        parent::__construct();
        $this->load->database();
         $this->load->helper("url");
        $this->load->model("member_model");
        $this->load->model("matching_model");
        if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			include 'log.php';
		}
    }
	public function index()
	{

	}
	public function job(){
		// echo "A";
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$result = $this->matching_model->job_matching(array("id"=>$id));
		$get_member = $this->matching_model->job_get_member(array("id"=>$id));
		// var_dump($get_member);
		// var_dump($result);
		$this->load->view("job",array("id"=>$id,"division"=>$division,"url"=>$url,"rank"=>$result,"member"=>$get_member));
	}
	public function job_matching(){
		// $id = $this->session->userdata['userid'];
		// echo $id;
		$result = $this->matching_model->job_matching(array("id"=>$id));
		// var_dump($result);
		// echo $result;
	}
	public function job_recom(){
		$id = $this->session->userdata['userid'];
		$divs = $this->input->post("divs");
		if($divs == "all"){
			$result = $this->matching_model->job_recom(array("id"=>$id,"divs"=>$divs));
		}else{
			$text = $this->input->post("text");
			$sects = $this->input->post("sects");
			$result = $this->matching_model->job_recom(array("id"=>$id,"divs"=>$divs,"sects"=>$sects,"text"=>$text));
		}
		
		// var_dump($result);
		echo json_encode($result);
		// echo $result;
	}
	public function project(){
		// echo "A";
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$member = $this->member_model->get_member(array("id"=>$id));
		$this->load->view("project",array("id"=>$id,"division"=>$division,"url"=>$url,"member"=>$member));
	}
	public function pro_mat(){
		$cate = $this->input->post("cate");
		$result = $this->matching_model->pro_mat(array("cate"=>$cate));
		echo json_encode($result);
	}
	public function project_send(){
		$sender = $this->session->userdata['userid'];
		// $name = $this->input->post("name");
		// $info = $this->input->post("info");
		$payer = $this->input->post("payer");
		// $content = '"'.$name.'" 프로젝트를 당신과 같이 하고싶습니다. 이프로젝트는 '.$info."입니다.";
		$content = $this->input->post('content');
		$result = $this->matching_model->project_reply(array("payer"=>$payer,"sender"=>$sender,"content"=>$content));
		echo $result;
		// echo $name.$info;
	}
}


?>