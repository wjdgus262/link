<?php
	class Mypage_model extends CI_Model {
 
	    function __construct()
	    {       
	        parent::__construct();
	    }
		function get_member($option){
		 	return $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
		}
		function get_portfoilo($option){
			return $this->db->query("SELECT * FROM portfoilo where portfoilo_id = '".$option."'")->result();
		}
		function get_portfoilo_filter($option,$keyward){
			return $this->db->query("SELECT * FROM portfoilo where portfoilo_id = '".$option."' and portfoilo_category like '%".$keyward."%'")->result();
		}
		function get_company(){
			return $this->db->query("SELECT * FROM `companyboarlist`")->result();
		
		}
		function get_count($option){
			$pr_count = count($this->db->query("SELECT * FROM portfoilo where portfoilo_id = '".$option."'")->result());
			$like_result = $this->db->query("SELECT * FROM portfoilo where portfoilo_id = '".$option."'")->result();
			$comment_result = $this->db->query("SELECT * FROM portfoilo where portfoilo_id = '".$option."'")->result();
			$coment_count = 0;
			$like_count = 0;
			foreach ($like_result as $value) {
				$like_count = $like_count + $value->portfoilo_like_count;
			}
			foreach ($comment_result as $value_con) {
				$coment_count = $coment_count + $value_con->portfoilo_comment_count;
			}
			$array = array(
				"pr_count"=>$pr_count,
				"like_count"=>$like_count,
				"comment_count"=>$coment_count
			);

			return $array;
		}
		public function get_reply($option){
			return $this->db->query("SELECT * from reply where reply_payer = '".$option['payer']."'")->result();
		}
		public function get_reply_paye($option){
			return $this->db->query("SELECT * from reply where reply_sender = '".$option['payer']."'")->result();
		}
		public function get_reply_count($option){
			return $this->db->query("SELECT * from reply where reply_payer = '".$option['payer']."' and reply_read = 0")->result();
		}
		public function color_change($option){
			
			
			$array = array(
				"member_color"=>$option['color'],
			);
			$this->db->where('id', $option['id']);
			$this->db->update('member', $array);
			return $this->db->query("SELECT member_color FROM member where id = '".$option['id']."'")->result();
		}

		public function delete_port($option){
			$this->db->where('num', $option['num']);
			return $this->db->delete('portfoilo');
		}

		public function reply_views($option){
			$u_date = array(
				"reply_read"=>1
			);
			$this->db->where('num', $option['num']);
			$this->db->update('reply', $u_date);

			$result = $this->db->query("SELECT * FROM reply where num = '".$option['num']."'")->result();
			$read_count = count($this->db->query("SELECT * from reply where reply_payer = '".$option['payer']."' and reply_read = 0")->result());
			$array = array(
				"num"=>$result[0]->num,
				"reply_payer"=>$result[0]->reply_payer,
				"reply_sender"=>$result[0]->reply_sender,
				"reply_content"=>$result[0]->reply_content,
				"reply_date"=>$result[0]->reply_date,
				"read_count"=>$read_count
			);
			return $array;
		}
		public function reply_views_pay($option){
			$result = $this->db->query("SELECT * FROM reply where num = '".$option['num']."'")->result();
			return $result;
		}

		public function delete_replay($option,$div,$id){
			// return count($option);
			for($i = 0; $i < count($option); $i++){
				$this->db->query("DELETE FROM reply where num = ".$option[$i]);
			}
			if($div == "payer"){
				return $this->db->query("SELECT * from reply where reply_payer = '".$id."'")->result();
			}else{
				return $this->db->query("SELECT * from reply where reply_sender = '".$id."'")->result();
			}

		}

		public function port_search($option){
			// return $this->db->query("SELECT * FROM portfoilo where portfoilo_id = '".$option['id']."' and portfoilo_bodytext like '%".$option['bodytext']."%'")->reulst();
			return $this->db->query("SELECT * FROM portfoilo where portfoilo_id = '".$option['id']."' and portfoilo_bodytext like '%".$option['bodytext']."%' ")->result();
		}

		function get_company_search($option){
			return $this->db->query("SELECT * FROM `companyboarlist` where companyname like '%".$option['bodytext']."%' or companytitle like '".$option['bodytext']."' or companyhash like '%".$option['bodytext']."%' or companySectors like '".$option['bodytext']."'")->result();
		}
		public function get_reply_search($option){
			return $this->db->query("SELECT * from reply where reply_payer = '".$option['payer']."' and reply_content like '%".$option['bodytext']."%'")->result();
		}
		public function get_reply_send_search($option){
			return $this->db->query("SELECT * from reply where reply_sender = '".$option['payer']."' and reply_content like '%".$option['bodytext']."%'")->result();
		}
}
?>