<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	protected $group_name = '';

	public function __construct()
	{
		parent::__construct();
		if ($this->group_name) {
			$this->initDb();
		}
	}

	private function initDb()
	{
		$dbDriverName = $this->getDbDriverName();
		$CI = & get_instance();
		if(isset($CI->{$dbDriverName}) && is_object($CI->{$dbDriverName})) {
			$this->db = $CI->{$dbDriverName};
		} else {
			$this->db = $CI->{$dbDriverName} = $this->load->database($this->group_name, TRUE);
		}
	}

	private function getDbDriverName()
	{
		if($this->group_name == '') {
			$db_conn_name = 'db_driver_';
		} else {
			$db_conn_name = 'db_driver_' . $this->group_name;
		}
		return $db_conn_name;
	}
}
