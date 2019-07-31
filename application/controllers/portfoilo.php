<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// date_default_timezone_set('Asia/Seoul');

class Portfoilo extends CI_Controller {
	function __construct()
    {       
        parent::__construct();
        $this->load->database();
         $this->load->helper("url");
        $this->load->model("member_model");
        $this->load->model("portfoilo_model");
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
		$div = $this->input->get("div");

		if($div == 'cate'){
			$cate = $this->input->get('cate');
			
			if($cate != ""){
				$result = $this->portfoilo_model->portfoilo_list(array("option"=>$cate));
			}
		}else if($div == "click"){
			$kekword = $this->input->get("kekword");
			if($kekword != ""){
				$result = $this->portfoilo_model->portfoilo_list(array("option"=>$kekword));
			}
		}else if($div == "search"){
			$kekword = $this->input->get("kekword");
			$bodytext = $this->input->get("bodytext");
			if($kekword != ""){
				$result = $this->portfoilo_model->portfoilo_list(array("option"=>$kekword,"bodytext"=>$bodytext));
			}
		}
		else{
			$result = $this->portfoilo_model->portfoilo_list(array("option"=>"all"));
		}
		$like_result = $this->portfoilo_model->portfoilo_like_list();
		// var_dump($like_result);
		$top_rank = $this->portfoilo_model->portfoilo_top_list();
		// var_dump($top_rank);
		$this->load->view("portfoilo",array("result"=>$result,"id"=>$id,"top_rank"=>$top_rank,"like_result"=>$like_result,"url"=>$url,"division"=>$division));
	}
	public function port_view(){
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
		}else{
			$id = null;
		}
		$num = $this->input->post('num');
		$result = $this->portfoilo_model->portfoilo_select($num,$id);
		// $array = array("num"=>$num);
		// var_dump($result);
		echo json_encode($result);
			// echo $num;
	}
	public function like_go(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$result = $this->portfoilo_model->like_insert($id,$num);
		echo $result[0]->portfoilo_like_count;
	}
	public function like_defind(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$result = $this->portfoilo_model->like_delete($id,$num);
		echo $result[0]->portfoilo_like_count;
	}
	public function comment_insert(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$bodytext = $this->input->post("bodytext");
		$result = $this->portfoilo_model->comment_insert(array("num"=>$num,"id"=>$id,"bodytext"=>$bodytext));
		// echo count($result);
		$array = array(
			"count"=>count($result),
			"result"=>$result,
			"login_id"=>$id
		);
		echo json_encode($array);
	}
	public function delete_comment(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$pornum = $this->input->post("pornum");
		// echo $num;
		$result = $this->portfoilo_model->comment_delete(array("num"=>$num,"id"=>$id,"pornum"=>$pornum));
		// echo count($result);
		$array = array(
			"count"=>count($result),
			"result"=>$result,
			"login_id"=>$id
		);
		// var_dump($result);
		echo json_encode($array);
		// echo $id;
	}
	public function update_comment(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$pornum = $this->input->post("pornum");
		$bodytext = $this->input->post("bodytext");
		$result = $this->portfoilo_model->comment_update(array("num"=>$num,"id"=>$id,"bodytext"=>$bodytext,"pornum"=>$pornum));
		// echo count($result);
		$array = array(
			"count"=>count($result),
			"result"=>$result,
			"login_id"=>$id
		);
		echo json_encode($array);
	}
	public function follow(){
		$follow_id = $this->input->post("follow_id");
		$id = $this->session->userdata['userid'];
		if($follow_id == $id){
			echo "mut";
		}else{
			echo $this->portfoilo_model->following(array("id"=>$id,"follow_id"=>$follow_id));
		}
		// echo $follow_id;
	}

	public function replay(){
		$content = $this->input->post("content");
		$payer = $this->input->post("payer");
		$id = $this->session->userdata['userid'];
		echo $this->portfoilo_model->insert_reply(array("content"=>$content,"payer"=>$payer,"sender"=>$id));
		// echo $content.$payer;

	}

	public function port_write(){
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$this->load->view("portfolio_insert",array("id"=>$id,"url"=>$url,"division"=>$division));
	}
	public function port_insert(){
		$array = $this->input->post("array");
		$id = $this->session->userdata['userid'];
		echo $this->portfoilo_model->port_insert(array("array"=>$array,"id"=>$id));
		// var_dump($array);
	}
	public function port_update_view(){
		$num = $this->input->get("num");
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		// $result = $this->portfoilo_model->get_update_port(array("num"=>$num));
		// var_dump($result);
		$this->load->view("portfolio_update",array("id"=>$id,"url"=>$url,"division"=>$division,"num"=>$num));
	}
	public function port_get(){
		$num = $this->input->post("num");
		$result = $this->portfoilo_model->get_update_port(array("num"=>$num));
		echo json_encode($result);
	}
	public function port_update(){
		$array = $this->input->post("array");
		$id = $this->session->userdata['userid'];
		echo $this->portfoilo_model->port_update(array("array"=>$array,"id"=>$id));
	}
}


?>