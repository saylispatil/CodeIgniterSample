<?php  
   class Select extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('customer');  
         return $query;  
      }
      public function filter($data = array())
      {
	if($data['c_name'] != "")
		if($data['c_email'] != "")
			if($data['c_age'] != "b")
				$query = "select * from customer where c_name='".$data['c_name']."' and c_email='".$data['c_email']."' and (select extract(year from c_dob)>1993)";
			else
				$query = "select * from customer where c_name='".$data['c_name']."' and c_email='".$data['c_email']."' and (select extract(year from c_dob)<=1993)";
		else
			if($data['c_age'] != "b")
				$query = "select * from customer where c_name='".$data['c_name']."' and (select extract(year from c_dob)>1993)";
			else
				$query = "select * from customer where c_name='".$data['c_name']."' and (select extract(year from c_dob)<=1993)";
	else if($data['c_email'] != "")
			if($data['c_age'] != "b")
				$query = "select * from customer where c_email='".$data['c_email']."' and (select extract(year from c_dob)>1993)";
			else
				$query = "select * from customer where c_email='".$data['c_email']."' and (select extract(year from c_dob)<=1993)";
	else
			if($data['c_age'] != "b")
				$query = "select * from customer where (select extract(year from c_dob)>1993)";
			else
				$query = "select * from customer where (select extract(year from c_dob)<=1993)";
	
	
	$result = $this->db->query($query);
	return $result;
      }  
   }  
?>  
