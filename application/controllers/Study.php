<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study extends MY_Controller {

	public function index()
	{
		$this->load->model('Study_model', array('a'=>123));
		$this->Study_model->fetchUserList();
//		$this->Study_model->updateUser();
	}
}
