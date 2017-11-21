 <?php 
class Users extends CI_Controller{
	//register users
	public function register(){

		$data['title'] = 'Sign Up';
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('username', 'Username','required|callback_check_username_exists');
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
		$this->form_validation->set_rules('password', 'Password ', 'required');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

		if($this->form_validation->run()===FALSE){
			$this->load->view('templates/header'); 
			$this->load->view('users/register', $data);
			$this->load->view('templates/footer');
		}
		else{

			//encrypt password
			$enc_password = md5($this->input->post('password'));
			$this->user_model->register($enc_password);

			$this->session->set_flashdata('user_registered', 'you are now registered ad can now login');

			redirect('jewels');
		}

	}
	//user login
	public function login(){

		$data['title'] = 'login';
		
		$this->form_validation->set_rules('username', 'Username','required');
		$this->form_validation->set_rules('password', 'Password ', 'required');
	

		if($this->form_validation->run()===FALSE){
			$this->load->view('templates/header'); 
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');
		}
		else{
			//get username
			$username= $this->input->post('username');
			//get and encrypt password
			$password= md5($this->input->post('password'));

			//login user
			$user_id = $this->user_model->login($username, $password);

			if($user_id){
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
					);
				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('user_loggedin', 'you are now logged in');

			redirect('jewels');
			}else{
				$this->session->set_flashdata('login_failed', 'login is invalid');

			redirect('users/login');
			}

		}
 
	}
	//user log out
	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('user_loggedout', 'you are now logged out');
		redirect('users/login');
	}

	//check is username exists
	public function check_username_exists($username){
		$this->form_validation->set_message('check_username_exists', 'that username already exists. Please choose a differents one');

		if($this->user_model->check_username_exists($username)){
			return true;
		}
		else{
			return false;
		}
	}

	//check if email exists
	public function check_email_exists($email){
		$this->form_validation->set_message('check_email_exists', 'that email already exists. Please choose a differents one');

		if($this->user_model->check_email_exists($email)){
			return true;
		}
		else{
			return false;
		}
	}
	
	
}

 ?>