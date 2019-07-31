<?php
	class Matching_model extends CI_Model {
 
	    function __construct()
	    {       
	        parent::__construct();
		        
	    }
	   public function job_get_member($option){
	   		$result = $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	   		return $result;
	   }
	   public function job_matching($option){
	   		$result = $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	   		// return $result;
	   		// echo $result[0]->category;
	   		if($result[0]->category == "개발자")
	   		{
	   			$keyward = "개발자";
	   		}else if($result[0]->category == "디자이너"){
	   			$keyward = "디자인";
	   		}else{
	   			$keyward = "기획자";
	   		}

	   		// $result_info = $result[0]->info;
	   		// $resexplode = explode(',', $result_info);
	   		// return $resexplode;

	   		// return $result[0]
	   		// return $result[0]->career;
	   		// return $result[0]->education;

	   		$sql = "select ( (((LENGTH(`companytalent`) - LENGTH((REPLACE(`companytalent`, '성실', '')))) / LENGTH('성실')) + ((LENGTH(`companyhash`) - LENGTH((REPLACE(`companyhash`, '".$keyward."', '')))) / LENGTH('".$keyward."')) + ((LENGTH(`companyinfo`) - LENGTH((REPLACE(`companyinfo`, '".$keyward."', '')))) / LENGTH('".$keyward."')) ))*20/4.325 AS score,`companynum`,`companyname`,`companyimg`,`companytalent`,`companySectors`,`companystart`,`companyend`,`companylogo`,`companyhash`,`companyinfo` from companyboarlist where MATCH(`companytalent`) against('성실') or MATCH(`companyhash`) against('".$keyward."') or MATCH(`companyinfo`) against('".$keyward."') or `companyqua` LIKE '%".$result[0]->education."%' or `companyqua` LIKE '%".$result[0]->career."%' ORDER BY score DESC LIMIT 0,10";
	   		return $this->db->query($sql)->result();
	   }
	   public function job_recom($option){
	   		$result = $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	   		if($result[0]->category == "개발자")
	   		{
	   			$keyward = "IT";
	   		}else if($result[0]->category == "디자이너"){
	   			$keyward = "디자인";
	   		}else{
	   			$keyward = "기획";
	   		}
	   		// return $keyward;
	   		if($option['divs'] == "all"){
	   			$sql = "SELECT * FROM `companyboarlist` WHERE `companySectors` like '%".$keyward."%'";
	   		}else{
	   			if($option['sects'] == "title"){
	   				$sql = "SELECT * FROM `companyboarlist` WHERE companytitle like '%".$option['text']."%' and `companySectors` like '%".$keyward."%'";
	   			}else if($option['sects'] == "enter"){
	   				$sql = "SELECT * FROM `companyboarlist` WHERE companyname like '%".$option['text']."%'  and `companySectors` like '%".$keyward."%'";
	   			}else{
	   				$sql = "SELECT * FROM `companyboarlist` WHERE companytalent like '%".$option['text']."%'  and `companySectors` like '%".$keyward."%'";
	   			}
	   		}
	   		
	   		return $this->db->query($sql)->result();
	   }
	   public function pro_mat($option){
	   			$member = $this->db->query("SELECT * FROM member where category = '".$option['cate']."'")->result();
	   			$port = $this->db->query("SELECT * FROM portfoilo")->result();
	   			$result = array(
	   					"member"=>$member,
	   					"port"=>$port
	   			);
	   			return $result;
	   }
	   public function project_reply($option){
	   		$today = date("Y-m-d H:i:s");
	   		$data = array(
			        'reply_payer' => $option['payer'],
			        'reply_sender' => $option['sender'],
			        'reply_content' => $option['content'],
			        'reply_date'=>$today
			);

			return $this->db->insert('reply', $data);
	   }
}
?>