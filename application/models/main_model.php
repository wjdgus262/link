<?php
	class Main_model extends CI_Model {
 
	    function __construct()
	    {       
	        parent::__construct();
		        
	    }
	    function portfoilo_top_list(){
	    	// SELECT * FROM `portfoilo` ORDER BY portfoilo_count DESC LIMIT 0,3;
	    	return $this->db->query("SELECT * FROM `portfoilo` ORDER BY portfoilo_count DESC LIMIT 0,5")->result();
	    }
}
?>