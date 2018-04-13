<?php 

class Xml_model extends CI_Model {

	public function __construct() {

		$this->load->database();

	}

	public function get_news($slug = FALSE) {

		if ($slug === FALSE) {

			$query = $this->db->get('newsletter');
			return $query->result_array();

		}

		$query = $this->db->get_where('newsletter',array('slug'=>$slug));
		return $query->row_array();

	}

	public function set_newsletter($data) {

		//limpa base e carrega novos registros

		$this->db->truncate('newsletter');
		return $this->db->insert_batch('newsletter',$data);

	}

}

 ?>