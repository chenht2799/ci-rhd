<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study_service extends MY_Service
{

	public function __construct($param = array())
	{
		parent::__construct();
	}

	public function fetchUserList()
	{
		$this->load->model('study_model');
		$this->study_model->fetchUserList();
	}
}
