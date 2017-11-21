<?php 
class Jewels extends CI_Controller{
	public function index(){
		$data['title'] = 'Featured Products';
		$data['jewels'] = $this->jewel_model->get_jewels();
		
		$this->load->view('templates/header');
		$this->load->view('jewels/index', $data);
		$this->load->view('templates/footer');
	}
	//getting random products
	

	public function view($slug = NULL){
		$data['jewel']= $this->jewel_model->get_jewels($slug);

		if(empty($data['jewel'])){
			show_404();
		}
		$data['product_name'] = $data['jewel']['product_name'];
		
		$this->load->view('templates/header');
		$this->load->view('jewels/view', $data);
		$this->load->view('templates/footer');
	}

	//add jewellery to database
	public function create(){
		$data['title'] = 'add new product';

		$data['categories']= $this->jewel_model->get_categories();

		//validation of fields
		$this->form_validation->set_rules('product_name', 'ProductName', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('price','Price', 'required');
		$this->form_validation->set_rules('no_views','NO of veiws', 'required');

		if($this->form_validation->run()===FALSE){
			$this->load->view('templates/header');
			$this->load->view('jewels/create', $data);
			$this->load->view('templates/footer');
		}else{

			//upload images
			$config['upload_path'] = './assets/images/products';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '4096';
 			$config['max_height'] = '2000';
 			$config['max_width'] = '2000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$post_image = 'noimage.jpg';
			}else{
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}

			$this->jewel_model->create_jewel($post_image);
			redirect('jewels');
		}
		
	}
	public function delete($id){
		$this->jewel_model->delete_jewel($id);
		redirect('jewels');
	}

	public function edit($slug){
		$data['jewel']= $this->jewel_model->get_jewels($slug);

		$data['categories']= $this->jewel_model->get_categories();

		if(empty($data['jewel'])){
			show_404();
		}
		$data['title'] ='Edit Product';
		
		$this->load->view('templates/header');
		$this->load->view('jewels/edit', $data);
		$this->load->view('templates/footer');
	}
	public function update(){
		$this->jewel_model->update_jewel();
		redirect('jewels');
	}
}

 ?>