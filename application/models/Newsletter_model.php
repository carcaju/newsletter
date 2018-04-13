<?php 

class Newsletter_model extends CI_Model {

	public function __construct() {

		$this->load->database();

	}

	public function get_newsletter($id_news = FALSE) {

		if ($id_news === FALSE) {

			$query = $this->db->order_by('title', 'ASC')->get('newsletter');
			return $query->result_array();

		}

		$query = $this->db->order_by('title', 'ASC')->get_where('newsletter',array('id_news'=>$id_news));
		return $query->row_array();

	}


	public function send_newsletter() {

		$marks = $this->input->post('mark');

		$body = "<html><body>";

		foreach ($marks as $id_news) {

			$query = $this->db->order_by('title', 'ASC')->get_where('newsletter',array('id_news'=>$id_news));
			$data = $query->row_array();

			$body .= "<b>".$data['title']."</b><br>";
			$body .= "".$data['link']."<br>";
			$body .= "".$data['category1']."<br>";
			$body .= "".$data['category2']."<br>";
			$body .= "".$data['description']."<br>";
			$body .= "<hr>";

		}


		$body .="</body></html>";

echo $body;
exit;

		//envia email - validar configurações
/*
		$this->email->from('carcaju@carcaju.com.br', 'Teste');
		$this->email->to($this->input->post('email'));

		$this->email->subject('Teste de Newsletter');
		$this->email->message($body);

		return $this->email->send();
*/
	}


}

 ?>