<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Account_model');
	}

	public function index()

	{
		$ammount=20;
		$sender_id=1;
		$receiver_id=2;

		$this->Account_model->transfer($ammount,$sender_id,$receiver_id);	
	}

}

/* End of file account.php */
/* Location: ./application/controllers/account.php */