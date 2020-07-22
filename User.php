<?php
class User extends CI_controller{
	function create()
	{
		$this->load->model('User_model');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		
		if($this->form_validation->run() == false){
			$this->load->view('create');
		}
		else{


			$formArray=array();
			$formArray['name']=$this->input->post('name');
			$formArray['email']=$this->input->post('name');
			$formArray['created_at']=date('Y-m-d');
			$this->User_model->create($formArray);
			$this->session->set_flashdata('success','Record data');
			redirect(base_url().'index.php/user/index');


		}
		
	}




	function edit()
	{
		$this->load->view('edit');
	}

	function list()
	{
		$this->load->view('list');
	}



}


?>