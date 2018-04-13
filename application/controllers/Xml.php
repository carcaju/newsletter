<?php 

class Xml extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('xml_model');
		$this->load->helper('url_helper');

	}


	public function index() {

		//Extrai valores do XML remoto
		$data['news'] = $this->loadXml();
		$data['titulo'] =  "Lista de Notícias";



#		$data['news'] = $this->news_model->get_news();
#		$data['title'] =  "News archive";

		$this->load->view('templates/header',$data);
		$this->load->view('xml/index', $data);
		$this->load->view('templates/footer');

	}


	public function loadXml($id_news = NULL) {

		$doc = new DOMDocument();
		$doc->load('http://prncloud.com/xml/rss_generico.php?clienteNews=277&paisNews=8');


		$newsletter = $doc->getElementsByTagName('item');

		$data = [];

		foreach ($newsletter as $news) {
			
			$titles = $news->getElementsByTagName("title");
			$title = $titles->item(0)->nodeValue;

			$links = $news->getElementsByTagName("link");
			$link = $links->item(0)->nodeValue;

			$categories = $news->getElementsByTagName("category");
			$category1 = $categories->item(0)->nodeValue;
			$category2 = $categories->item(1)->nodeValue;

			$descriptions = $news->getElementsByTagName("description");
			$description = $descriptions->item(0)->nodeValue;

			$line = array(
				'title' => $title,
				'link' => $link,
				'category1' => $category1,
				'category2' => $category2,
				'description' => $description
			);

			array_push($data,$line);

		}

	if($id_news === NULL) {
		return $data;
	} else {
		return $data[$id_news];
	}

	}

	public function import() {

		$data = $this->loadXml();

		$this->xml_model->set_newsletter($data);
		$this->load->view('xml/success');

	}


	public function send($id_news=NULL) {

		$news = $this->loadXml($id_news);

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = "Enviar Newsletter";

		$this->form_validation->set_rules('email', 'Email', 'required');

		if($this->form_validation->run() === FALSE) {

			$this->load->view('templates/header',$data);
			$this->load->view('xml/send');
			$this->load->view('templates/footer');

		} else {

			$this->xml_model->send_newsletter($news);
			$this->load->view('xml/success');
		}

	}


}

?>