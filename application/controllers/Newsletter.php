<?php 

class Newsletter extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('newsletter_model');
		$this->load->helper('url_helper');

	}

	public function index() {

		$data['news'] = $this->newsletter_model->get_newsletter();
		$data['titulo'] =  "Newsletter";

		$this->load->view('templates/header',$data);
		$this->load->view('newsletter/index', $data);
		$this->load->view('templates/footer');

	}

	public function view($slug = NULL) {


		$data['news_item'] = $this->newsletter_model->get_newsletter($slug);

		if (empty($data['news_item'])) {

			show_404();

		}

		$data['title'] = $data['newsletter_item']['title'];

		$this->load->view('templates/header',$data);
		$this->load->view('newsletter/view', $data);
		$this->load->view('templates/footer');




	}

	public function send($id_news=NULL) {

		$marks = $this->input->post('mark');

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = "Enviar Newsletter";
		$data['marks'] = $marks;

		$this->form_validation->set_rules('email', 'Email', 'required');

		if($this->form_validation->run() === FALSE) {

			$this->load->view('templates/header',$data);
			$this->load->view('newsletter/send');
			$this->load->view('templates/footer');

		} else {

			$this->newsletter_model->send_newsletter();
			$this->load->view('newsletter/success');
		}

	}

}

 ?>

 