<?php 
class Jewel_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_jewels($slug = FALSE){
		if($slug === FALSE){
			
			$this->db->order_by('jewels.id', 'DESC');
			//$this->db->order_by('id', 'RANDOM');
			$this->db->join('categories', 'categories.id = jewels.category_id');
			$query = $this->db->get('jewels');

			return $query->result_array();
		}
		$query = $this->db->get_where('jewels', array('slug' => $slug));
		return $query->row_array();
	}

	

	public function create_jewel($post_image){
		$slug= url_title($this->input->post('product_name'));
		$data = array(
			'product_name' => $this->input->post('product_name'),
			'slug'         => $slug,
			'description'  => $this->input->post('description'),
			'category'     => $this->input->post('category'),
			'price'        => $this->input->post('price'),
			'no_views'     => $this->input->post('no_views'),
			'type'         => $this->input->post('type'),
			'category_id'  => $this->input->post('category_id'),
			'post_image'   => $post_image
		);
		return $this->db->insert('jewels', $data);
	}
	public function delete_jewel($id){
		$this->db->where('id', $id);
		$this->db->delete('jewels');
		return true;
	}
	public function update_jewel(){
		$slug= url_title($this->input->post('product_name'));
		$data = array(
			'product_name' => $this->input->post('product_name'),
			'slug'         => $slug,
			'description'  => $this->input->post('description'),
			'category'     => $this->input->post('category'),
			'price'        => $this->input->post('price'),
			'no_views'     => $this->input->post('no_views'),
			'type'         => $this->input->post('type'),
			'category_id'  => $this->input->post('category_id'),
			'post_image'   => $post_image
		);
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('jewels', $data);
	}
	public function get_categories(){
		$this->db->order_by('name');
		$query = $this->db->get('categories');
		return $query->result_array();
	}
	public function get_jewels_by_category($category_id){
		$this->db->order_by('jewels.id', 'DESC');
		$this->db->join('categories', 'categories.id = jewels.category_id');
		$query = $this->db->get_where('jewels', array('category_id'=>$category_id));
		return $query->result_array();
	}
}


 ?>