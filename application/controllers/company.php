<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// date_default_timezone_set('Asia/Seoul');

class Company extends CI_Controller {
	function __construct()
    {       
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");
        $this->load->model("member_model");
        $this->load->library("pagination");
        $this->load->model("company_model");
        if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			include 'log.php';
		}
    }
	public function index()
	{
		$url = base_url();
		// echo $url;
		$div = $this->input->get("div");
		// echo $div;
		$div_str = explode("/", $div);
		// var_dump($div_str);

		// echo $div;
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$member_result = $this->company_model->get_member(array("id"=>$id));
		$config = array();
		$config['per_page'] = 10;
		$config['first_link'] = false; 
    	$config['last_link']  = false;
		$config['uri_segment'] = $this->uri->total_segments();; 
    	$config['num_links'] = 8;
		if($div_str[0] == "" || $div_str[0] == "all"){
			$tap_div = "all";
			$config['base_url'] = base_url("company/index") ;
			$config ['prev_link'] = '<i class="fa fa-caret-left"></i>';
    		$config ['next_link'] = '<i class="fa fa-caret-right"></i>';
			$config['total_rows'] = $this->company_model->record_count(array("div"=>"all"));
			$this->pagination->initialize($config);
			$aa = "all";
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		}else if($div_str[0] == "division"){
			$tap_div = "division";
			$config ['prev_link'] = false;
    		$config ['next_link'] = false;
			$config['base_url'] = base_url("company/index")."?div=division";
			$config['total_rows'] = $this->company_model->record_count(array("div"=>"division"));
			$this->pagination->initialize($config);
			$array = $this->segment_explode(current_url());
			// var_dump($array);
			if(isset($array[7])){
				// $page = $array[9];
				$array_exp1 = explode("/", $array[7]);
				if(isset($array_exp1[1])){
					$page = $array_exp1[1];
				}else{
					$page = 0;
				}
				
			}else{
				$page = 0;
			}
			// echo $page;
		}else if($div_str[0] == "date"){
			$tap_div = "date";
			$config ['prev_link'] = false;
    		$config ['next_link'] = false;
			$config['base_url'] = base_url("company/index")."?div=date";
			$config['total_rows'] = $this->company_model->record_count(array("div"=>"date"));
			$this->pagination->initialize($config);
			$array = $this->segment_explode(current_url());
			// var_dump($array);
			if(isset($array[7])){
				// $page = $array[9];
				$array_exp1 = explode("/", $array[7]);
				if(isset($array_exp1[1])){
					$page = $array_exp1[1];
				}else{
					$page = 0;
				}
				
			}else{
				$page = 0;
			}
		}
		else{
			$tap_div = null;
			$cate = $this->input->get("cate");
			$cate_exp = explode("/", $cate);
			$config ['prev_link'] = false;
    		$config ['next_link'] = false;
			
    		if($div == "cateclick"){
    			$config['base_url'] = base_url("company/index")."?div=cateclick&cate=".$cate_exp[0]."";
				$config['total_rows'] = $this->company_model->record_count(array("div"=>"cateclick","cate"=>$cate_exp[0]));
    		}
    		else if($div == "search_title"){
    			$config['base_url'] = base_url("company/index")."?div=search_title&cate=".$cate_exp[0]."";
				$config['total_rows'] = $this->company_model->record_count(array("div"=>"search_title","cate"=>$cate_exp[0]));
    		}
    		else if($div == "search_cmpany"){
    			$config['base_url'] = base_url("company/index")."?div=search_cmpany&cate=".$cate_exp[0]."";
				$config['total_rows'] = $this->company_model->record_count(array("div"=>"search_cmpany","cate"=>$cate_exp[0]));
    			// echo $this->company_model->record_count(array("div"=>"search_cmpany","cate"=>$cate_exp[0]));
    		}
			$aa = $cate_exp[0];
			$this->pagination->initialize($config);
			$array = $this->segment_explode(current_url());
			// var_dump($array);
			if(isset($array[9])){
				// $page = $array[9];
				$array_exp1 = explode("/", $array[9]);
				if(isset($array_exp1[1])){
					$page = $array_exp1[1];
				}else{
					$page = 0;
				}
				
			}else{
				$page = 0;
			}
		}
		if($div_str[0] == "" || $div_str[0] == "all"){
			$data["result"]	= $this->company_model->get_company($config['per_page'],$page,array("div"=>"all"));
		}else if($div_str[0] == "division"){
			$data["result"] = $this->company_model->get_company($config['per_page'],$page,array("div"=>"division"));
		}else if($div_str[0] == "date"){
			$data["result"] = $this->company_model->get_company($config['per_page'],$page,array("div"=>"date"));
		}
		else{
			$cate = $this->input->get("cate");
			$cate_exp = explode("/", $cate);
			// echo $div;
			// echo $cate_exp[0];
			$data["result"]	= $this->company_model->get_company($config['per_page'],$page,array("div"=>$div_str[0],"cate"=>$cate_exp[0]));
			// var_dump($data["result"]);
		}
		$data["links"] = $this->pagination->create_links();
		$top_company = $this->company_model->top_company();

		$this->load->view("company",array("id"=>$id,"pagin"=>$data["links"],"results"=>$data["result"],"top_rank"=>$top_company,"tabdiv"=>$tap_div,"url"=>$url,"division"=>$division,"member_result"=>$member_result));
	}
	public function company_view(){
		$url = base_url();
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$num = $this->input->get("num");
		$result = $this->company_model->get_company_view(array("num"=>$num));
		$like_result = $this->company_model->company_like_list(array("num"=>$num,"id"=>$id));
		$count_result = $this->company_model->company_counts(array("num"=>$num));
		// var_dump($count_result);
		// echo count($like_result);
		if(count($like_result) == 0){
			$likes = "not";
		}else{
			$likes = "success";
		}
		// echo $num;
		// var_dump($result);
		$this->load->view("company_view",array("id"=>$id,"url"=>$url,"division"=>$division,"result"=>$result,"likes"=>$likes,"count"=>$count_result));
	}
	public function insert_company(){
		// echo "a";
		if(isset($this->session->userdata['userid'])){
			$id = $this->session->userdata['userid'];
			$division = $this->session->userdata['division'];
		}else{
			$id = null;
			$division = null;
		}
		$url = base_url();
		$this->load->view("company_insert",array("url"=>$url,"id"=>$id,"division"=>$division));
	}

	public function update_scarp(){
		$nums = $this->input->post("nums");
		$id = $this->session->userdata['userid'];
		// echo $nums;
		echo $this->company_model->update_scarp_model(array("nums"=>$nums,"id"=>$id));
	}
	public function update_company_likes(){
		$nums = $this->input->post("nums");
		$id = $this->session->userdata['userid'];
		echo $this->company_model->update_like_model(array("nums"=>$nums,"id"=>$id));
	}
	// public function company_count(){
	// 	$num = $this->input->post("num");
	// 	// echo $num;
	// 	$result = $this->company_model->company_counts(array("num"=>$num));
	// 	echo json_encode($result);
	// }
	public function company_scrap(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$result = $this->company_model->scrap_company(array("num"=>$num,"id"=>$id));
		// var_dump($result);
		// echo $result;
		echo json_encode($result);
		// echo $id;
	}
	public function like_success(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$result = $this->company_model->company_like_success(array("num"=>$num,"id"=>$id));
		echo json_encode($result);
	}
	public function like_delete(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$result = $this->company_model->company_like_delete(array("num"=>$num,"id"=>$id));
		echo json_encode($result);
	}
	public function like_company(){
		$id = $this->session->userdata['userid'];
		$num = $this->input->post("num");
		$result = $this->company_model->like_company(array("num"=>$num,"id"=>$id));
		echo $result;
	}
	function segment_explode($seg) { //세크먼트 앞뒤 '/' 제거후 uri를 배열로 반환
	    $len = strlen($seg);
	    if(substr($seg, 0, 1) == '/') {
	        $seg = substr($seg, 1, $len);
	    }
	    $len = strlen($seg);
	    if(substr($seg, -1) == '/') {
	        $seg = substr($seg, 0, $len-1);
	    }
	    $seg_exp1 = explode("/", $seg);
	 
	        //쿼리스트링을 $seg_ext와 동일한 형태의 배열로 반환
	        if($_SERVER["QUERY_STRING"]){
	            $s_arr=array();
	            $strings = explode("&", $_SERVER["QUERY_STRING"]);
	            foreach ($strings as $strs) {
	                $a_arr = explode("=", $strs);
	                foreach ($a_arr as $atrs) {
	                    array_push($s_arr, $atrs);
	                }
	            }
	            //맨끝 쿼리스트링 제거
	            array_pop($seg_exp1);
	            //쿼리스트링을 제거한 배열과 쿼리스트링을 배열화한 것을 합쳐서 반환
	            $seg_exp = array_merge($seg_exp1, $s_arr);
	        } else {
	            $seg_exp = $seg_exp1;
	        }
	    return $seg_exp;
	}
}


?>