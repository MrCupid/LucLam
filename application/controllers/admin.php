<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/home',TRUE);
	}

	public function dangky()
	{
		$this->load->view('admin/account/dangky',TRUE);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */