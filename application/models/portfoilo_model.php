<?php
	date_default_timezone_set('Asia/Seoul');
	class Portfoilo_model extends CI_Model {
 
	    function __construct()
	    {       
	        parent::__construct();
		        
	    }
	    function portfoilo_like_list(){
	    	return $this->db->query("SELECT * FROM `portfoilo_like`")->result();
	    }
	    function portfoilo_top_list(){
	    	// SELECT * FROM `portfoilo` ORDER BY portfoilo_count DESC LIMIT 0,3;
	    	return $this->db->query("SELECT * FROM `portfoilo` ORDER BY portfoilo_count DESC LIMIT 0,10")->result();
	    }
	    function portfoilo_list($option){
	    	if($option['option'] == "all"){
	    		return $this->db->query("SELECT * FROM `portfoilo`")->result();
	    	}else if($option['option'] == "count"){
	    		return $this->db->query("SELECT * FROM `portfoilo` ORDER BY `portfoilo_count` DESC")->result();
	    	}else if($option['option'] == "top"){
	    		return $this->db->query("SELECT * FROM `portfoilo` ORDER BY `portfoilo_comment_count` DESC")->result();
	    	}else if($option['option'] == "like"){
	    		return $this->db->query("SELECT * FROM `portfoilo` ORDER BY `portfoilo_like_count` DESC")->result();
	    	}else if($option['option'] == "제목"){
	    		return $this->db->query("SELECT * FROM `portfoilo` where portfoilo_title like '%".$option['bodytext']."%'")->result();
	    	}else if($option['option'] == "내용"){
	    		return $this->db->query("SELECT * FROM `portfoilo` where portfoilo_bodytext like '%".$option['bodytext']."%'")->result();
	    	}else if($option['option'] == "작성자"){
	    		return $this->db->query("SELECT * FROM `portfoilo` where portfoilo_nickname like '%".$option['bodytext']."%'")->result();
	    	}
	    	else{
	    		return $this->db->query("SELECT * FROM `portfoilo` WHERE `portfoilo_category` like '%".$option['option']."%'")->result();
	    	}
	    }
	   function portfoilo_select($option,$login_id){
	   		$this->load->helper('date');
	   		$this->load->helper("url");
	   		if(isset($this->session->userdata['userid'])){
				$id = $this->session->userdata['userid'];
				$like_select = count($this->db->query("SELECT * FROM portfoilo_like where portfoilo_num = '".$option."'and portfoilo_id = '".$id."'")->result());
				if($like_select == 0){
					$like_this = "not_like";
				}else{
					$like_this = "like_success";
				}
			}else{
				$like_this = "not_login";
			}

	   		$this->db->query("UPDATE  portfoilo SET portfoilo_count = portfoilo_count + 1 where num = ".$option."");

	   		$portfoilo = $this->db->query("SELECT * FROM `portfoilo` where `num` = '".$option."'")->result();
	   		$member_select = $this->db->query("SELECT * FROM member where id = '".$portfoilo[0]->portfoilo_id."'")->result();
	   		$comment = $this->db->query("SELECT portfoilo_comment.num,portfoilo_comment.portfoilo_num,portfoilo_comment.portfoilo_comment_id,portfoilo_comment.portfoilo_comment_bodytext,member.porfile_img FROM portfoilo_comment,`member` where portfoilo_num = '".$portfoilo[0]->num."' and portfoilo_comment_id = member.id ORDER BY `comment_date` DESC")->result();
	   		$commen_count = count($comment);
	   		$like_count = count($this->db->query("SELECT * FROM portfoilo_like where portfoilo_num = '".$portfoilo[0]->num."'")->result());

	   		if(isset($login_id)){
	   			$login_member = $this->db->query("SELECT * FROM member where id = '".$login_id."'")->result();
	   			$login_member_img = $login_member[0]->porfile_img;
	   		}else{
	   			$login_member_img = base_url()."/static/images/empty_userimg.png";
	   		}
	   		


	   		$now = date('Y-m-d');
	   		$portfoilo_date = $portfoilo[0]->portfoilo_date;
	   		$diff = date_diff(new DateTime(date('Y-m-d')),new DateTime($portfoilo_date));

	   		$array = array(
	   			"id"=>$portfoilo[0]->portfoilo_id,
	   			"id_img"=>$member_select[0]->porfile_img,
	   			"title"=>$portfoilo[0]->portfoilo_title,
	   			"bodytext"=>$portfoilo[0]->portfoilo_bodytext,
	   			"img"=>$portfoilo[0]->portfoilo_img,
	   			"category"=>$portfoilo[0]->portfoilo_category,
	   			"date"=>$diff->days,
	   			"count"=>$portfoilo[0]->portfoilo_count,
	   			"date_porfoilo"=>$portfoilo[0]->portfoilo_date,
	   			"hash_tag"=>$portfoilo[0]->portfoilo_hash,
	   			"tool"=>$portfoilo[0]->portfoilo_tool,
	   			"comment_count"=>$commen_count,
	   			"like_count"=>$like_count,
	   			"user_category"=>$member_select[0]->category,
	   			"user_num"=>$member_select[0]->num,
	   			"like"=>$like_this,
	   			"comment_list"=>$comment,
	   			"login_member_img"=>$login_member_img,
	   			"login_id"=>$login_id
	   		);
	   		return $array;
	   }
	   public function like_insert($id,$num){
	   		$sql = "SELECT * FROM portfoilo where num = '".$num."'";
	   		$result = $this->db->query($sql)->result();

	   		$a_count = $result[0]->portfoilo_like_count;
	   		$a_count++;
	   		$u_data = array(
	   			'portfoilo_like_count'=> $a_count
	   		);
	   		$this->db->where('num', $num);
			$this->db->update('portfoilo', $u_data);
	   		$data = array(
			   'portfoilo_num' => $num ,
			   'portfoilo_id' => $id ,
			);
			$this->db->insert('portfoilo_like', $data); 
			return $this->db->query("SELECT * FROM portfoilo where num = '".$num."'")->result();
	   }
	   public function like_delete($id,$num){
	   		$sql = "SELECT * FROM portfoilo where num = '".$num."'";
	   		$result = $this->db->query($sql)->result();

	   		$a_count = $result[0]->portfoilo_like_count;
	   		$a_count--;
	   		$u_data = array(
	   			'portfoilo_like_count'=> $a_count
	   		);
	   		$this->db->where('num', $num);
			$this->db->update('portfoilo', $u_data);

	   		// $this->db->delete('portfoilo_like', array("portfoilo_id"=>$id));
	   		$this->db->query("DELETE FROM portfoilo_like where portfoilo_id = '".$id."' and portfoilo_num = ".$num.""); 
	   		return $this->db->query("SELECT * FROM portfoilo where num = '".$num."'")->result();
	   }
	   public function comment_insert($option){
	   	$today = date("Y-m-d H:i:s");
	   		$data = array(
	   			"portfoilo_num"=>$option["num"],
	   			"portfoilo_comment_id"=>$option["id"],
	   			"portfoilo_comment_bodytext"=>$option["bodytext"],
	   			"comment_date"=>$today
	   		);
	   		$this->db->insert('portfoilo_comment', $data); 
	   		$result = count($this->db->query("SELECT * FROM portfoilo_comment where portfoilo_num = '".$option["num"]."'")->result());

	   		$u_data = array(
	   			'portfoilo_comment_count'=> $result
	   		);
	   		$this->db->where('num', $option["num"]);
			$this->db->update('portfoilo', $u_data);
	   		// return $this->db->query("SELECT * FROM portfoilo_comment where portfoilo_num = '".$option["num"]."'")->result();
	   		return $this->db->query("SELECT portfoilo_comment.num,portfoilo_comment.portfoilo_num,portfoilo_comment.portfoilo_comment_id,portfoilo_comment.portfoilo_comment_bodytext,member.porfile_img FROM portfoilo_comment,`member` where portfoilo_num = '".$option["num"]."' and portfoilo_comment_id = member.id ORDER BY `comment_date` DESC")->result();
	   }
	   public function comment_delete($option){
	   	
	   		$this->db->where('num', $option['num']);
			$this->db->delete('portfoilo_comment');
	   		$result = count($this->db->query("SELECT * FROM portfoilo_comment where portfoilo_num = '".$option["pornum"]."'")->result());

	   		$u_data = array(
	   			'portfoilo_comment_count'=> $result
	   		);
	   		$this->db->where('num', $option["pornum"]);
			$this->db->update('portfoilo', $u_data);
	   		// return $this->db->query("SELECT * FROM portfoilo_comment where portfoilo_num = '".$option["num"]."'")->result();
	   		return $this->db->query("SELECT portfoilo_comment.num,portfoilo_comment.portfoilo_num,portfoilo_comment.portfoilo_comment_id,portfoilo_comment.portfoilo_comment_bodytext,member.porfile_img FROM portfoilo_comment,`member` where portfoilo_num = '".$option["pornum"]."' and portfoilo_comment_id = member.id ORDER BY `comment_date` DESC")->result();
	   }
	   public function comment_update($option){
	   	$today = date("Y-m-d H:i:s");
	   		$data = array(
	   			"portfoilo_comment_bodytext"=>$option["bodytext"],
	   		);
	   		$this->db->where('num', $option["num"]);
			$this->db->update('portfoilo_comment', $data);
	   		$result = count($this->db->query("SELECT * FROM portfoilo_comment where portfoilo_num = '".$option["pornum"]."'")->result());

	   		$u_data = array(
	   			'portfoilo_comment_count'=> $result
	   		);
	   		$this->db->where('num', $option["pornum"]);
			$this->db->update('portfoilo', $u_data);
	   		// return $this->db->query("SELECT * FROM portfoilo_comment where portfoilo_num = '".$option["num"]."'")->result();
	   		return $this->db->query("SELECT portfoilo_comment.num,portfoilo_comment.portfoilo_num,portfoilo_comment.portfoilo_comment_id,portfoilo_comment.portfoilo_comment_bodytext,member.porfile_img FROM portfoilo_comment,`member` where portfoilo_num = '".$option["pornum"]."' and portfoilo_comment_id = member.id ORDER BY `comment_date` DESC")->result();
	   }
	   public function following($option){
	   		// SELECT * FROM `member` WHERE id = "wjdgus262" and follow LIKE "%fbtls25%";
	   		$array_count = count($this->db->query("SELECT * FROM member where id = '".$option['id']."' and follow LIKE '%".$option['follow_id']."%'")->result());
	   		// echo $array_count;
	   		if(!$array_count){
	   			$array = $this->db->query("SELECT * FROM member where id = '".$option['id']."' and follow LIKE '".$option['follow_id']."'")->result();
	   			$text = $array[0]->follow;
	   			$text .= $option['follow_id'].",";
	   			return $this->db->query("UPDATE member set follow = '".$text."' where id = '".$option['id']."'");
	   		}else{
	   			return "find";
	   		}
	   }
	   public function insert_reply($option){
	   		$today = date("Y-m-d H:i:s");
	   		$data = array(
			        'reply_payer' => $option['payer'],
			        'reply_sender' => $option['sender'],
			        'reply_content' => $option['content'],
			        'reply_date'=>$today
			);

			return $this->db->insert('reply', $data);
	   }
	   public function port_insert($option){
	   	$member = $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	   	$today = date("Y-m-d");
	   		$data = array(
			        'portfoilo_id'=>$option['id'],
			        "portfoilo_nickname"=>$member[0]->name,
			        "portfoilo_title"=>$option['array'][0],
			        "portfoilo_bodytext"=>$option['array'][3],
			        "portfoilo_img"=>$option['array'][5],
			        "portfoilo_category"=>$option['array'][1],
			        "portfoilo_date"=>$today,
			        "portfoilo_hash"=>$option['array'][4],
			        "portfoilo_tool"=>$option['array'][2]
			);
	   		// return $option['array'][0];
			// $this->db->insert('mytable', $data);
			return $this->db->insert("portfoilo",$data);
	   }
	   public function port_update($option){
	   		// $member = $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	   		// $today = date("Y-m-d");
	   		$data = array(
			        "portfoilo_title"=>$option['array'][0],
			        "portfoilo_bodytext"=>$option['array'][3],
			        "portfoilo_img"=>$option['array'][5],
			        "portfoilo_category"=>$option['array'][1],
			        "portfoilo_hash"=>$option['array'][4],
			        "portfoilo_tool"=>$option['array'][2]
			);
			$this->db->where('num', $option['array'][6]);
			return $this->db->update('portfoilo', $data);
	   }
	   public function get_update_port($option){
	   		return $this->db->query("SELECT * FROM portfoilo where num = '".$option['num']."'")->result();
	   }
}
?>