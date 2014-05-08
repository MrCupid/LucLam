<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class location extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function themdiadiem()
	{
		$this->data['page'] = 'themdiadiem';
		$this->load->view('include/head',$this->data);
		$this->load->view('include/header',$this->data);
		$this->load->view('location/themdiadiem',$this->data);
		$this->load->view('include/footer',$this->data);
	}

	public function diadiem()
	{
		$this->data['page'] = 'diadiem';
		$this->load->view('include/head',$this->data);
		$this->load->view('include/header',$this->data);
		$this->load->view('location/diadiem',$this->data);
		$this->load->view('include/footer',$this->data);
	}

}

/* End of file location.php */
/* Location: ./application/controllers/location.php */