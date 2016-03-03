<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study extends MY_Controller
{

	public function index()
	{
		$this->load->service('study_service');
		$this->study_service->fetchUserList();
	}
}
