<?php
	class Company_model extends CI_Model {
 
	    function __construct()
	    {       
	        parent::__construct();
	    }
	    public function get_member($option){
	    	return $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	    }
	    public function record_count($option){
	    	if($option['div'] == "all"){
	    		return count($this->db->query("SELECT * FROM `companyboarlist`")->result());
	    	}else if($option['div'] == "cateclick"){
	    		return count($this->db->query("SELECT * FROM `companyboarlist` where companyhash LIKE '%".$option['cate']."%'")->result());
	    	}else if($option['div'] == "search_title"){
	    		return count($this->db->query("SELECT * FROM `companyboarlist` WHERE companyhash LIKE '%".$option['cate']."%' or companytitle LIKE '%".$option['cate']."%'")->result());
	    	}else if($option['div'] == "search_cmpany"){
	    		return count($this->db->query("SELECT * FROM `companyboarlist` WHERE companyname LIKE '%".$option['cate']."%'")->result());
	    	}else if($option['div'] == "division"){
	    		return count($this->db->query("SELECT * FROM `companyboarlist` ORDER BY `companySectors` ASC")->result());
	    	}else if($option['div'] == "date"){
	    		return count($this->db->query("SELECT * FROM `companyboarlist` ORDER BY `companyend` ASC")->result());
	    	}    	
	    }
	    public function get_company($limit,$page,$option){
	    	// return $page;
	    	if($option['div'] == "all"){
	    		return $this->db->query("SELECT * FROM `companyboarlist` ORDER BY `companyname` ASC LIMIT ".$page.",".$limit." ")->result();
	    	}else if($option['div'] == "cateclick"){
	    		return $this->db->query("SELECT * FROM `companyboarlist` WHERE companyhash LIKE '%".$option['cate']."%' LIMIT ".$page.",".$limit."")->result();
	    	}else if($option['div'] == "search_title"){
	    		return $this->db->query("SELECT * FROM `companyboarlist` WHERE companyhash LIKE '%".$option['cate']."%' or companytitle LIKE '%".$option['cate']."%' LIMIT ".$page.",".$limit."")->result();
	    	}
	    	else if($option['div'] == "search_cmpany"){
	    		return $this->db->query("SELECT * FROM `companyboarlist` WHERE companyname LIKE '%".$option['cate']."%' LIMIT ".$page.",".$limit."")->result();
	    	}else if($option['div'] == "division"){
	    		return $this->db->query("SELECT * FROM `companyboarlist` ORDER BY `companySectors` DESC LIMIT  ".$page.",".$limit."")->result();
	    	}else if($option['div'] == "date"){
	    		return $this->db->query("SELECT * FROM `companyboarlist` ORDER BY `companyend` DESC LIMIT  ".$page.",".$limit."")->result();
	    	}
	    }
	    public function top_company(){
	    	return $this->db->query('SELECT * FROM `companyboarlist` ORDER BY `companyboarlist`.`companycount` DESC LIMIT 0,9')->result();
	    }
	    public function update_scarp_model($option){
	    	$nu_explode = explode(",", $option['nums']);
	    	for($i = 0; $i < count($nu_explode); $i++){
	    		$this->db->query("UPDATE companyboarlist set company_scrap = company_scrap + 1 where companynum = '".$nu_explode[$i]."'");
	    	}
	    	$u_result = $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	    	$data = array(
	    		"scrap"=>$u_result[0]->scrap .$option['nums']
	    	);
	    	$this->db->where('id', $option['id']);

			return $this->db->update('member', $data);	
	    }
	    public function update_like_model($option){
	    	$u_result = $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	    	$data = array(
	    		"like_company"=>$u_result[0]->like_company .$option['nums']
	    	);
	    	$this->db->where('id', $option['id']);

			return $this->db->update('member', $data);	
	    }
	    public function get_company_view($option){
	    	return $this->db->query("SELECT * FROM `companyboarlist` where `companynum` = ".$option['num']."")->result();
	    }


	    public function company_counts($option){
	    	$this->db->query("UPDATE companyboarlist set companycount = companycount + 1 where companynum = '".$option['num']."'");


	    	return $this->db->query("SELECT companycount,company_scrap,company_like FROM companyboarlist where companynum = ".$option['num']."")->result();

	    }
	    public function scrap_company($option){
	    	$result = $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	    	// return $result[0]->scrap;
	    	$m_date = array(
	    		"scrap"=>$result[0]->scrap.$option['num'].","
	    	);
	    	$this->db->where('id', $option['id']);
			$this->db->update('member', $m_date);

			$this->db->query("UPDATE companyboarlist set company_scrap = company_scrap + 1 where companynum = '".$option['num']."'");
	    	return $this->db->query("SELECT company_scrap FROM companyboarlist where companynum = ".$option['num']."")->result();
	    }

	    public function company_like_success($option){
	    	$i_date = array(
	    		"company_num"=>$option['num'],
	    		"user_id"=>$option['id']
	    	);
	    	$this->db->insert('company_like', $i_date);
	    	$this->db->query("UPDATE companyboarlist set company_like = company_like + 1 where companynum = '".$option['num']."'");
	    	return $this->db->query("SELECT company_like FROM companyboarlist where companynum = ".$option['num']."")->result();
	    }
	    public function company_like_delete($option){
	    	$this->db->query("DELETE FROM company_like where user_id = '".$option['id']."' and company_num = ".$option['num'].""); 
	    	$this->db->query("UPDATE companyboarlist set company_like = company_like - 1 where companynum = '".$option['num']."'");
	    	return $this->db->query("SELECT company_like FROM companyboarlist where companynum = ".$option['num']."")->result();
	    }		
	    public function company_like_list($option){
	    	return $this->db->query("SELECT * FROM company_like where company_num = ".$option['num']." and user_id = '".$option['id']."'")->result();
	    }
	    public function like_company($option){
	    	$result = $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	    	// return $result[0]->scrap;
	    	$m_date = array(
	    		"like_company"=>$result[0]->like_company.$option['num'].","
	    	);
	    	$this->db->where('id', $option['id']);
			return $this->db->update('member', $m_date);
	    }
}
?>