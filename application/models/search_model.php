<?php
	date_default_timezone_set('Asia/Seoul');
	class Search_model extends CI_Model {
 
	    function __construct()
	    {       
	        parent::__construct();
		        
	    }
	  public function get_search($option){
	  		$portfoilo =  $this->db->query("SELECT * FROM portfoilo where portfoilo_nickname like '%".$option."%' or portfoilo_title like '%".$option."%' or portfoilo_bodytext like '%".$option."%' LIMIT 0, 10")->result();
	  		$company = $this->db->query("SELECT * FROM companyboarlist where companyname like '%".$option."%' or companytitle like '%".$option."%' or companyhash like '%".$option."%' or companySectors like '%".$option."%' LIMIT 0, 10")->result();
	  		$comperition = $this->db->query("SELECT * FROM competition where title like '%".$option."%' or host like '%".$option."%' or cate like '".$option."' LIMIT 0, 10")->result();
	  		$gove = $this->db->query("SELECT * FROM government where name like '%".$option."%' or area like '%".$option."%' or person like '%".$option."%' LIMIT 0, 5")->result();
	  		$qna = $this->db->query("SELECT * FROM qnaboard where qnatitle like '%".$option."%' or qnabodytext like '%".$option."%' or qnawriter like '".$option."' or qnacate like '%".$option."%' LIMIT 0, 5")->result();
	  		$result_array = array(
	  			"port"=>$portfoilo,
	  			"company"=>$company,
	  			"comperition"=>$comperition,
	  			"gove"=>$gove,
	  			"qna"=>$qna
	  		);
	  		return $result_array;
	  }
}
?>