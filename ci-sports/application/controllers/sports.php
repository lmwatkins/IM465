<?php
class Sports extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sports_model');
	}

	public function index()
	{
		$data['sports'] = $this->sports_model->get_sports();
		$data['title'] = 'My Sports Teams';

		$this->load->view('templates/header', $data);
		$this->load->view('sports/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['sports'] = $this->sports_model->get_sports($slug);

		if (empty($data['sports_item']))
		{
			show_404();
		}

		$data['title'] = $data['sports_item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('sports/view', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Add A Team';
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('sports/create');
			$this->load->view('templates/footer');
			
		}
		else
		{
			$this->sports_model->set_sports();
			$this->load->view('sports/success');
		}
	}
}



