<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends Public_Controller {

	public function __construct(){
		parent:: __construct();
		$this->data['page'] = 'home';
	}

	public function index()
	{
		$this->load->view('include/head',$this->data);
		$this->load->view('include/header',$this->data);
		$this->load->view('include/banner',$this->data);
		$this->load->view('index/index',$this->data);
		$this->load->view('include/footer',$this->data);
	}
}