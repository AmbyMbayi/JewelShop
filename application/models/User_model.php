<?php 
class User_model extends CI_Model{
	public function register($enc_password){
		//user data array
		$data= array(
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $enc_password

		);
		//insert into the database
		return $this->db->insert('users', $data);
	}
	//user login

	public function login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$result = $this->db->get('users');

		if($result->num_rows()== 1){
			return $result->row(0)->id;
		}else{
			return false;
		}
	}
	//get users
	public function get_users(){
			//$this->db->order_by('username');
			$query = $this->db->get('users');
			return $query->result_array();
		}

	//check username exists
	public function check_username_exists($username){
		$query = $this->db->get_where('users', array('username' =>$username));

		if(empty($query->row_array())){
			return true;
		}
		else{
			return false;
		}
	}
	//check email exists
	public function check_email_exists($email){
		$query = $this->db->get_where('users', array('email' =>$email));

		if(empty($query->row_array())){
			return true;
		}
		else{
			return false;
		}
	}
}

 ?>