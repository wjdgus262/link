<?php
	class Support_model extends CI_Model {
 
	    function __construct()
	    {       
	        parent::__construct();
		        
	    }
	    public function get_gove($option){
	    	// return "a";
	    	if($option['divs'] == "all"){
	    		return $this->db->query("SELECT * FROM `government`")->result();
	    	}else if($option['divs'] == "person"){
	    		return $this->db->query("SELECT * FROM `government` where person = '".$option['data']."'")->result();
	    	}else if($option['divs'] == "area"){
	    		return $this->db->query("SELECT * FROM `government` where area = '".$option['data']."'")->result();
	    	}else if($option['divs'] == "title"){
	    		return $this->db->query("SELECT * FROM `government` where name like '%".$option['data']."%'")->result();
	    	}else if($option['divs'] == "views"){
	    		return $this->db->query("SELECT * FROM `government` where gove_option like '%".$option['data']."%'")->result();
	    	}
	    	
	    }
	    public function gove_count($option){
	    	// return $option['num'];
	    	return $this->db->query("UPDATE government set support_count = support_count + 1 where num = ".$option['num']."");
	    }
	    public function top_rank(){
	    	return $this->db->query("SELECT * FROM `government` ORDER BY `support_count` DESC LIMIT 0,10;")->result();;
	    }
	    public function get_qna($option){
	    	if($option['divs'] == "전체"){
	    		return $this->db->query("SELECT * FROM `qnaboard` ORDER BY `qnadate` DESC ")->result();
	    	}else if($option['divs'] == "취업"){
	    		return $this->db->query("SELECT * FROM `qnaboard` where qnacate = '".$option['divs']."' ORDER BY `qnadate` DESC ")->result();
	    	}else if($option['divs'] == "직장생활"){
	    		return $this->db->query("SELECT * FROM `qnaboard` where qnacate = '".$option['divs']."' ORDER BY `qnadate` DESC ")->result();
	    	}else if($option['divs'] == "기타"){
	    		return $this->db->query("SELECT * FROM `qnaboard` where qnacate = '".$option['divs']."' ORDER BY `qnadate` DESC ")->result();
	    	}
	    	
	    }
	    public function search_get($option){
	    	// retrun 
	   		if($option['divs'] == "제목"){
	   			return  $this->db->query("SELECT * FROM `qnaboard` where qnatitle like '%".$option['bodytext']."%'")->result();
	   		}else if($option['divs'] == "내용"){
	   			return  $this->db->query("SELECT * FROM `qnaboard` where qnabodytext like '%".$option['bodytext']."%'")->result();
	   		}else if($option['divs'] == "작성자"){
	   			return $this->db->query("SELECT * FROM `qnaboard` where qnawriter like '%".$option['bodytext']."%'")->result();
	   		}
	    }
	    public function insert_qna($option){
	    	$member= $this->db->query("SELECT name FROM member where id = '".$option['id']."'")->result();
	    	// return $member;
	    	// insert 
	    	$data = array(
			        'qnatitle' => $option['title'],
			        'qnabodytext' => $option['bodytext'],
			        'qnawriter_id' => $option['id'],
			        "qnacate"=>$option['cate'],
			        "qnawriter"=>$member[0]->name,
			);
			return $this->db->insert('qnaboard', $data);
	    }
	    public function get_qna_view($option){
	    	//return $this->db->query("SELECT * FROM qnaboard where num = ".$option['num']."")->result();
	    	$this->db->query("UPDATE qnaboard set qnacount = qnacount + 1 where num = ".$option['num']."");
	    	$view_result = $this->db->query("SELECT * FROM qnaboard where num = ".$option['num']."")->result();
	    	$reply_result = $this->db->query("SELECT * FROM qnareply where qnanum = ".$option['num']."")->result();
	    	$member_result = $this->db->query("SELECT * FROM member")->result();
	    	$result_array = array(
	    		"view"=>$view_result,
	    		"reply"=>$reply_result,
	    		"member"=>$member_result,
	    	);
	    	return $result_array;
	    }
	    public function qna_delete($option){
	    	return $this->db->delete('qnaboard', array('num' => $option['num']));
	    }
	    public function get_qna_update($option){
	    	return $this->db->query("SELECT * FROM qnaboard where num = ".$option['num']."")->result();
	    }
	    public function qna_reply_insert($option){
	    	$data = array(
			        'qnanum' => $option['num'],
			        'qnareplybodytext' => $option['contents'],
			        'qnareplyid' => $option['id'],
			);
			return $this->db->insert('qnareply', $data);
	    }
	    public function qna_reply_delete($option){
	    	return $this->db->delete('qnareply', array('num' => $option['num']));
	    }
	    public function qna_success($option){
	    	$result = $this->db->query("UPDATE qnareply SET qnareplycheck = 1 where num = ".$option['reply_num']."");
	    	if($result){
	    		return $last_result = $this->db->query("UPDATE qnaboard SET qnacheck = 1 where num = ".$option['num']."");
	    	}else{
	    		return -1;
	    	}
	    }

	    public function get_coms($option){
	    	if($option['divs'] == "all"){
	    		return $this->db->query("SELECT * FROM competition")->result();
	    	}else{
	    		if($option['divs'] == "cateclick"){
	    			return $this->db->query("SELECT * FROM competition where cate = '".$option['keyward']."'")->result();
	    		}else{
	    			if($option['select'] == "title"){
	    				return $this->db->query("SELECT * FROM competition where title like '%".$option['keyward']."%'")->result();
	    			}else{
	    				return $this->db->query("SELECT * FROM competition where host like '%".$option['keyward']."%'")->result();
	    			}
	    		}
	    	}
	    	
	    }
	    public function get_top_com(){

	    	return $this->db->query("SELECT * FROM `competition` ORDER BY count DESC LIMIT 0,10;")->result();
	    }
	    public function com_update_count($option){
	    	return $this->db->query("UPDATE competition SET count = count + 1 where num = ".$option['num']."");
	    }
}
?>