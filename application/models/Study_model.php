<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study_model extends MY_Model
{
	protected $group_name = 'study_master';

	public function __construct($param = array())
	{
		parent::__construct();
	}

	public function fetchUserList()
	{
		$a = $this->db->from('user')->get()->row_array();
		print_r($a);
	}

	public function updateUser()
	{
		$data = array(
			'sex' => 0
		);
		$this->db->where('id', 1);
		$this->db->update('user', $data);
	}
}
