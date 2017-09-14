<?php  
   class First extends CI_Controller  
   {  
      public function index()  
      {  
         //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['h']=$this->select->select();  
         //return the data in view  
         $this->load->view('select_view', $data);  
      }  
	public function getvalues()
	{
		$c_name = $this->input->post("c_name");
		$c_email = $this->input->post("c_email");
		$c_age = $this->input->post("c_age");
		$data=array('c_name'=>$c_name, 'c_email'=> $c_email, 'c_age' => $c_age);
		$this->load->model('select');
		$data['h']=$this->select->filter($data);
		$this->load->view('select_view', $data);  

	}

   }  
?>  
