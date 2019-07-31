<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// date_default_timezone_set('Asia/Seoul');

class Support extends CI_Controller {
	function __construct()
    {       
        parent::__construct();
        $this->load->database();
         $this->load->helper("url");
        $this->load->model("member_model");
        $this->load->model("support_model");
        if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			include 'log.php';
		}
    }
	public function index()
	{

	}
	public function government(){
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$top_rank = $this->support_model->top_rank();
		// echo "a";
		$this->load->view("government",array("id"=>$id,"division"=>$division,"url"=>$url,"top_rank"=>$top_rank));
	}
	public function gove_view(){
		// echo "a";
		$divs = $this->input->post("divs");
		if($divs == "all"){
			$result = $this->support_model->get_gove(array("divs"=>$divs));
		}else if($divs == "person"){
			$data = $this->input->post("data");
			$result = $this->support_model->get_gove(array("divs"=>$divs,"data"=>$data));
		}else if($divs == "area"){
			$data = $this->input->post("data");
			$result = $this->support_model->get_gove(array("divs"=>$divs,"data"=>$data));
		}
		else if($divs == "title"){
			$data = $this->input->post("data");
			$result = $this->support_model->get_gove(array("divs"=>$divs,"data"=>$data));
		}else if($divs == "views"){
			$data = $this->input->post("data");
			$result = $this->support_model->get_gove(array("divs"=>$divs,"data"=>$data));
		}
		
		// echo $result;
		echo json_encode($result);
	}
	public function gove_count(){
		$num = $this->input->post("num");
		$result = $this->support_model->gove_count(array("num"=>$num));
		echo $result;
	}
	public function qna(){
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		// $result = $this->support_model->get_qna();
		// var_dump($result);
		// echo "a";
		$this->load->view("qna",array("id"=>$id,"division"=>$division,"url"=>$url));
	}
	public function competition(){
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		
		$top = $this->support_model->get_top_com();
		// var_dump($result);
		// var_dump($result);
		// echo "a";
		$this->load->view("competition",array("id"=>$id,"division"=>$division,"url"=>$url,"top"=>$top));
	}
	public function com_update_count(){
		$num = $this->input->post("num");
		$result = $this->support_model->com_update_count(array("num"=>$num));
		echo $result;
		// echo $num;
	}
	public function get_com(){
		$divs = $this->input->post("divs");
		// echo $divs;
		if($divs == "all"){
			$result = $this->support_model->get_coms(array("divs"=>$divs));
		}else{
			if($divs == "cateclick"){
				$keyward = $this->input->post("keyward");	
				$result = $this->support_model->get_coms(array("divs"=>$divs,"keyward"=>$keyward));
			}else{
				$keyward = $this->input->post("keyward");
				$select = $this->input->post("select");
				$result = $this->support_model->get_coms(array("divs"=>$divs,"keyward"=>$keyward,"select"=>$select));
			}
		}
		echo json_encode($result);
		// var_dump($result);
	}
	public function qnawriter(){
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		// $result = $this->support_model->get_qna();
		// var_dump($result);
		// echo "a";
		$this->load->view("qnawriter",array("id"=>$id,"division"=>$division,"url"=>$url));
	}
	public function qnaupdate(){
	   $url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$num = $this->input->post("num");
		$result = $this->support_model->insert_qna(array("id"=>$id,"title"=>$title,"bodytext"=>$bodytext));
		$this->load->view("qnaupdate",array("id"=>$id,"division"=>$division,"url"=>$url));
	}
	public function qnainsert(){
		$id = $this->session->userdata['userid'];
		$title = $this->input->post("title");
		$bodytext = $this->input->post("bodytext");
		$cate = $this->input->post("select");
		// echo $bodytext;
		// echo htmlspecialchars($bodytext);
		$result = $this->support_model->insert_qna(array("id"=>$id,"title"=>$title,"bodytext"=>$bodytext,"cate"=>$cate));
		// var_dump($result);
		echo $result;
	}
	public function qnadelete(){
		$num = $this->input->post("num");
		$result = $this->support_model->qna_delete(array("num"=>$num));
		echo $result;
	}
	public function qnaview(){
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$num = $this->input->get("num");
		$result = $this->support_model->get_qna_view(array("num"=>$num));
		// var_dump($result);
		// echo $result['member'][0]->num;
		$this->load->view("qnaview",array("id"=>$id,"division"=>$division,"url"=>$url,"result"=>$result,"num"=>$result['view'][0]->num));
	}
	public function qna_count(){
		$num = $this->input->post("num");
		// echo $num;
		$result = $this->support_model->qna_count(array("num"=>$num));
		echo $result;
		// var_dump($result);
	}
	public function get_qna_con(){
		$divs = $this->input->post("divs");
		$result = $this->support_model->get_qna(array("divs"=>$divs));
		// echo $divs;
		// var_dump($result);
		echo json_encode($result);
	}
	public function get_search_qna(){
		$text = $this->input->post("bodytext");
		$divs = $this->input->post("divs");
		$result = $this->support_model->search_get(array("bodytext"=>$text,"divs"=>$divs));
		// var_dump($result);
		echo json_encode($result);
		// echo $divs;
		// echo $text;
	}
	public function insert_qnareply(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$contents = $this->input->post("contents");
		$result = $this->support_model->qna_reply_insert(array("num"=>$num,"contents"=>$contents,"id"=>$id));
		echo $result;
	}
	public function qna_reply_delete(){
	   	$num = $this->input->post("num");
	   	$result = $this->support_model->qna_reply_delete(array("num"=>$num));
		echo $result;	
	}
	public function qna_success(){
		$num = $this->input->post("num");
		$reply_num = $this->input->post("replynum");
		$result = $this->support_model->qna_success(array("num"=>$num,"reply_num"=>$reply_num));
		echo $result;	
	}
}


?>