<?php
	class Member_model extends CI_Model {
 
	    function __construct()
	    {       
	        parent::__construct();
	    }
	    function find_id($option){
	        return count($this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result());
	    }
	    function find_email($option){
	    	return count($this->db->query("SELECT * FROM member where email = '".$option['email']."'")->result());
	    }
	    function insert_member($option){
	    	// return $option;
	    	$hash = password_hash($option[5], PASSWORD_BCRYPT);
			$data = array(
			   'id' => $option[4] ,
			   'pw' => $hash,
			   'name' => $option[0],
			   'age'=> $option[1],
			   'email'=>$option[2],
			   'phone'=>$option[3],
			   'category'=>$option[8],
			   'division'=>$option[12],
			   'military'=>$option[7],
			   'career'=>$option[10],
			   'gender'=>$option[6],
			   'sectors'=>$option[9],
			   'info'=>$option[11],
			   'education'=>$option[13]
			);
			return $this->db->insert('member', $data); 
	    }
	    function update_member($option){
	    	$hash = password_hash($option[5], PASSWORD_BCRYPT);
	    	if($option[13] == null){
	    		$data = array(
			   'pw' => $hash,
			   'name' => $option[0],
			   'age'=> $option[1],
			   'phone'=>$option[3],
			   'category'=>$option[8],
			   'division'=>$option[12],
			   'military'=>$option[7],
			   'career'=>$option[10],
			   'gender'=>$option[6],
			   'sectors'=>$option[9],
			   'info'=>$option[11],
			   'education'=>$option[14]
				);
	    	}else{
	    		$data = array(
			   'pw' => $hash,
			   'name' => $option[0],
			   'age'=> $option[1],
			   'phone'=>$option[3],
			   'category'=>$option[8],
			   'division'=>$option[12],
			   'military'=>$option[7],
			   'career'=>$option[10],
			   'gender'=>$option[6],
			   'sectors'=>$option[9],
			   'info'=>$option[11],
			   'porfile_img'=>$option[13],
			   'education'=>$option[14]
				);
	    	}
	    	$this->db->where('id', $option[4]);
			return $this->db->update('member', $data);
	    }
	 	function login($option)
	 	{
	 		$sql = "SELECT * FROM member where id = '".$option['id']."'";
	 		// $count = count();
	 		return $this->db->query($sql)->result();
	 	}
	    // function get($topic_id){
	    //     return $this->db->get_where('topic', array('id'=>$topic_id))->row();
	    // }
	    function find_member_pw($option){
	    	$rand_pw = $this->generateRandomString(10);
	    	$u_data = array(
	    		"pw"=>password_hash($rand_pw, PASSWORD_BCRYPT)
	    	);
	    	$this->db->where('id', $option['id']);
			$this->db->update('member', $u_data);
	    	$result = $this->db->query("SELECT name,id,email FROM member where id = '".$option['id']."' and name = '".$option['name']."'")->result();
	    	$array = array(
	    		"result"=>$result,
	    		"pw"=>$rand_pw
	    	);
	    	return $array;
	    }
	    function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	public function get_member($option){
		return $this->db->query("SELECT * FROM member where id = '".$option['id']."'")->result();
	}
}
?>