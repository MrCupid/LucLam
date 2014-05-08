<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['page'] = 'tintuc';
		$this->load->view('include/head',$this->data);
		$this->load->view('include/header',$this->data);
		$this->load->view('news/tintuc',$this->data);
		$this->load->view('include/footer',$this->data);
	}

}

/* End of file news.php */
/* Location: ./application/controllers/news.php */