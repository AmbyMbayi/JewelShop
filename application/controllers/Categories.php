<?php 
class Categories extends CI_Controller{
	public function index(){
		$data['title'] = 'Categories';
		$data['categories'] = $this->category_model->get_categories();

		$this->load->view('templates/header');
		$this->load->view('categories/index', $data);
		$this->load->view('templates/footer');

	}
	public function create(){
		$data['title'] = 'Create Category';

		$this->form_validation-> set_rules('name', 'Name', 'required'); 
		if($this->form_validation->run()=== FALSE){
			$this->load->view('templates/header');
			$this->load->view('categories/create', $data);
			$this->load->view('templates/footer');
		}
		else{
			$this ->category_model->create_category();
			redirect('categories');
		}
	}
	public function jewels($id){
		$data['title'] = $this->category_model->get_category($id)->name;

		$data['jewels'] = $this->jewel_model->get_jewels_by_category($id);

		$this->load->view('templates/header');
			$this->load->view('jewels/index', $data);
			$this->load->view('templates/footer');

	}
}

 ?>