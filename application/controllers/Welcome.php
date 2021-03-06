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

	public function Eight(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=usd&from=EUR&amount=1",
		  CURLOPT_HTTPHEADER => array(
		    "Content-Type: text/plain",
		    "apikey: trtK2AYucXtlCbpYmhod4k1bDr0IXc8x"
		  ),
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET"
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$data = json_decode($response);
		echo "1 Euro = ".$data->result.' USD<br>';

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=ron&from=EUR&amount=1",
		  CURLOPT_HTTPHEADER => array(
		    "Content-Type: text/plain",
		    "apikey: trtK2AYucXtlCbpYmhod4k1bDr0IXc8x"
		  ),
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET"
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$data = json_decode($response);
		echo "1 Euro = ".$data->result.' RON';
	}

}
