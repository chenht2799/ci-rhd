<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		register_shutdown_function(function(){
			foreach(get_object_vars($this) as $key => $val) {
				if (0 === strpos($key, 'db_conn_')) {
					$this->$key->close();
				}
			}
		});
	}

}
