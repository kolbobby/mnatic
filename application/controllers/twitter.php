<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twitter extends CI_Controller {
	public function post() {
		echo $_POST['content'];
	}
}