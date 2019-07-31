<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// date_default_timezone_set('Asia/Seoul');

class Member extends CI_Controller {
	function __construct()
    {       
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");
        $this->load->model("member_model");
        if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			include 'log.php';
		}
    }
		public function find_id(){
		$id = $this->input->post("id");
		$find = $this->member_model->find_id(array("id"=>$id));
		if($find){
			echo "find";
		}else{
			echo "not find";
		}
	}
	public function find_email(){
		$id = $this->input->post("email");
		$find = $this->member_model->find_email(array("email"=>$id));
		if($find){
			echo "find";
		}else{
			echo "not find";
		}
	}
	public function insert_member(){
		$array = $this->input->post("insert");
		$result = $this->member_model->insert_member($array);
		// var_dump($result);
		echo $result;
		// echo $array;
		// var_dump($array);
	}
	public function update_member(){
		// echo "a";
		$array = $this->input->post("update");
		$result = $this->member_model->update_member($array);
		echo $result;
		// var_dump($array);
	}
	public function login()
	{
		$id = $this->input->post("id");
		$pw = $this->input->post("pw");
		// echo $id.$pw;
		$count = count($this->member_model->login(array("id"=>$id,"pw"=>$pw)));
		$result = $this->member_model->login(array("id"=>$id));
		// var_dump($result);
		// echo $pw;
		// echo $result[0]->pw;
		if(password_verify($pw, $result[0]->pw)){
			$this->session->set_userdata("userid",$result[0]->id);
			$this->session->set_userdata("division",$result[0]->division);
			echo $this->session->userdata['userid'];
		}else{
			echo "error";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
	}
	public function get_member(){
		$id = $this->session->userdata['userid'];
		// echo $id;
		$member = $this->member_model->get_member(array("id"=>$id));
		// var_dump($member);
		echo json_encode($member);
	}
	public function find_pw(){
		$id = $this->input->post("id");
		$name = $this->input->post("name");
		$result = $this->member_model->find_member_pw(array("id"=>$id,"name"=>$name));
		if(count($result) == 0){
			echo "error";
		}else{
			// echo $result['result'][0]->email;
			// echo $result['pw'];
			// var_dump($result['res']);
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);

			$this->email->from('user1@naver.com', '테스트');
			$this->email->to($result['result'][0]->email); 
			// $this->email->cc('another@another-example.com'); 
			// $this->email->bcc('them@their-example.com'); 

			$this->email->subject("LINK 비밀번호 임시비밀번호 메일");
			$this->email->message("<div style='width:100%; height:180px;'>
				"."<h1 style='font-size:30px; text-align: center;
	margin-top: 50px;
	font-size: 30px;
	color: #424242;'>".$id."님의 임시 비밀번호는</h1><h1 style='font-size:26px; text-align: center;
	margin-top: 10px;
	color: #6A3BFF;'>".$result['pw']."</h1><p style='font-size:18px; text-align: center;
	margin-top: 10px;
	color: #424242; font-weight: bold;'>입니다. 로그인 하신후 꼭 비밀번호 변경을 해주시길 바랍니다.</p>"."</div>");	
			// $this->email->message($this->load->view("test"));

			$this->email->send();

			// echo $this->email->print_debugger();
			echo "success";
		}
	}
}


?>