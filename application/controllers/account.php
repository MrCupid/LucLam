<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function dangky()
	{
		$this->data['page'] = 'dangky';
		$this->load->view('include/head',$this->data);
		$this->load->view('include/header',$this->data);
		$this->load->view('user/dangky',$this->data);
		$this->load->view('include/footer',$this->data);
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */