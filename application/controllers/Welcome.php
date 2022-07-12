<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function One(){
		$this->load->model('WelcomeModel');
		$count = $this->WelcomeModel->One();
		$this->load->view('one', $count);
	}

	public function Two(){
		$this->load->model('WelcomeModel');
		$count = $this->WelcomeModel->Two();
		$this->load->view('two', $count);
	}

	public function Three(){
		$this->load->model('WelcomeModel');
		$count = $this->WelcomeModel->Three();
		$this->load->view('three', $count);
	}

	public function Four(){
		$this->load->model('WelcomeModel');
		$count = $this->WelcomeModel->Four();
		$this->load->view('four', $count);
	}

	public function Five(){
		$this->load->model('WelcomeModel');
		$count = $this->WelcomeModel->Five();
		$this->load->view('five', $count);
	}

	public function Six(){
		$this->load->model('WelcomeModel');
		$count = $this->WelcomeModel->Six();
		$this->load->view('six', $count);
	}

	public function Seven(){
		$this->load->model('WelcomeModel');
		$count['data'] = $this->WelcomeModel->Seven();
		$this->load->view('seven', $count);
	}

}
