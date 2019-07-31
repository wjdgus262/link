<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// date_default_timezone_set('Asia/Seoul');

class Mypage extends CI_Controller {
	function __construct()
    {       
        parent::__construct();
        $this->load->database();
         $this->load->helper("url");
        $this->load->model("member_model");
        $this->load->model("mypage_model");
        if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			include 'log.php';
		}
    }
    public function index(){
    	$url = base_url();
    	if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}

		$mypage = $this->input->get("id");
		if($mypage != $id){
			$this->load->helper('url');
        	redirect($url."main");
		}else{
				$result = $this->mypage_model->get_member(array("id"=>$mypage));
		$company_result = $this->mypage_model->get_company();
		$reply_result = $this->mypage_model->get_reply(array("payer"=>$mypage));
		$reply_count = count($reply_result);
		$reply_read_count = count($this->mypage_model->get_reply_count(array("payer"=>$mypage)));
		$category = $result[0]->category;

			if($result[0]->porfile_img != ""){
				$userimg = $result[0]->porfile_img;
			}else{
				$userimg = null;
			}

			if($result[0]->member_color != ""){
				$membercolor = $result[0]->member_color;
			}else{
				$membercolor = '#e87096';
			}

		// $result = $this->mypage_model->get_member(array("id"=>$mypage));
		$port_result = $this->mypage_model->get_portfoilo($mypage);
		$counts = $this->mypage_model->get_count($mypage);
		// echo $counts['pr_count'];
		// var_dump($counts);
		// var_dump($port_result);
		// var_dump($reply_result);
		// $this->load->view("portfoilo",array("result"=>$result,"id"=>$id,"top_rank"=>$top_rank));
    	// echo $result[0]->category;
    	// var_dump($result);
    	$this->load->view("mypage_1",array("id"=>$id,"userimg"=>$userimg,"result"=>$result,"port_result"=>$port_result,"counts"=>$counts,"color"=>$membercolor,"mypage"=>$mypage,"company_result"=>$company_result,"url"=>$url,"reply"=>$reply_result,"reply_count"=>$reply_count,"read_count"=>$reply_read_count,"division"=>$division));
		}

	
    }
	public function get_my_port(){
		$mypage = $this->input->post("id");
		$port_result = $this->mypage_model->get_portfoilo($mypage);
		echo json_encode($port_result);
		// var_dump($port_result);
		// echo $mypage;
	}	
	public function get_my_port_filter(){
		$mypage = $this->input->post("id");
		$keyward = $this->input->post("keyward");
		$port_result = $this->mypage_model->get_portfoilo_filter($mypage,$keyward);
		echo json_encode($port_result);
	}
	public function get_my_scarp(){
		$mypage = $this->input->post("id");
		$company_result = $this->mypage_model->get_company();
		$result = $this->mypage_model->get_member(array("id"=>$mypage));
		$array_result = array(
			"member"=>$result,
			"company"=>$company_result
		);
		echo json_encode($array_result);
	}
	public function reply_send_get(){
		$mypage = $this->input->post("id");
		$reply_result = $this->mypage_model->get_reply(array("payer"=>$mypage));
		echo json_encode($reply_result);
	}
	public function reply_paye_get(){
		$mypage = $this->input->post("id");
		$reply_result = $this->mypage_model->get_reply_paye(array("payer"=>$mypage));
		echo json_encode($reply_result);
	}


	public function color_change(){
		// echo "a";
		$userid = $this->input->post("id");
		$color = $this->input->post("color");
		$result = $this->mypage_model->color_change(array("id"=>$userid,"color"=>$color));
		echo $result[0]->member_color;
		// echo $color;
	}

	public function delete_portfoilo(){
		$num = $this->input->post("num");
		// echo $num;
		echo $this->mypage_model->delete_port(array("num"=>$num));
	}

	public function reply_view(){
		 if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
		}
		$num = $this->input->post("num");
		// echo $num;
		$result = $this->mypage_model->reply_views(array("num"=>$num,"payer"=>$id));
		echo json_encode($result);
		// var_dump($result);
	}
	public function reply_view_payer(){
		 if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
		}
		$num = $this->input->post("num");
		// echo $num;
		$result = $this->mypage_model->reply_views_pay(array("num"=>$num,"payer"=>$id));
		echo json_encode($result);
		// var_dump($result);
	}
	public function delete_reply(){
		$delete_arr = $this->input->post("delete_reply");
		$div = $this->input->post("div");
		$id = $this->input->post("id");
		// var_dump($delete_arr);
		// echo $div;
		$result = $this->mypage_model->delete_replay($delete_arr,$div,$id);
		echo json_encode($result);
		// echo $result;
	}


	public function port_search(){
		$id = $this->input->post("id");
		$bodytext = $this->input->post("bodytext");
		$result = $this->mypage_model->port_search(array("id"=>$id,"bodytext"=>$bodytext));
		echo json_encode($result);
	}
	public function get_my_scarp_search(){
		$mypage = $this->input->post("id");
		$bodytext = $this->input->post("bodytext");
		$company_result = $this->mypage_model->get_company_search(array("bodytext"=>$bodytext));

		$result = $this->mypage_model->get_member(array("id"=>$mypage));
		$array_result = array(
			"member"=>$result,
			"company"=>$company_result
		);
		echo json_encode($array_result);
	}

	public function reply_payer_search(){
		$mypage = $this->input->post("id");
		$bodytext = $this->input->post("bodytext");
		$reply_result = $this->mypage_model->get_reply_search(array("payer"=>$mypage,"bodytext"=>$bodytext));
		echo json_encode($reply_result);
	}
	public function reply_send_search(){
		$mypage = $this->input->post("id");
		$bodytext = $this->input->post("bodytext");
		$reply_result = $this->mypage_model->get_reply_send_search(array("payer"=>$mypage,"bodytext"=>$bodytext));
		echo json_encode($reply_result);
	}
}


?>