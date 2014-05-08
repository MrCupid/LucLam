<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends CI_Controller {
    public function __construct()
    {
      parent::__construct();

  		$this->data['title'] = "Trang chủ";
      //$this->load->model(array('public_model','bodem_model','cart_model'));

      if(!isset($_GET['lang']))
      {
        $lang = 'vietnamese';
        $this->data['lang_db'] = '';
      }
      else
      {
        $lang=$_GET['lang'];
        if ($lang == 'vietnamese') {
          $this->data['lang_db'] = '';
        }
        else{
          $this->data['lang_db'] = '_EN';
        }
      }

      $this->lang->load('main',$lang);
  		//$this->data['menu'] = $this->public_model->GetMenu($this->data['lang_db']);
    }
    public $data;
}

class Admin_Controller extends CI_Controller {
    public function __construct()
    {
      parent::__construct();

      $this->data['title'] = "Trang chủ";
      //$this->load->model(array('public_model','bodem_model','cart_model'));

      if(!isset($_GET['lang']))
      {
        $lang = 'vietnamese';
        $this->data['lang_db'] = '';
      }
      else
      {
        $lang=$_GET['lang'];
        if ($lang == 'vietnamese') {
          $this->data['lang_db'] = '';
        }
        else{
          $this->data['lang_db'] = '_EN';
        }
      }

      $this->lang->load('main',$lang);
      //$this->data['menu'] = $this->public_model->GetMenu($this->data['lang_db']);
    }
    public $data;
}