<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twitter extends CI_Controller {
	private $connection;
	public function Twitter() {
		parent::__construct();
		
		// INSERT KEYS
		$consumer_key = "waCJgHUYryh7MKx1duFEqA";
		$consumer_secret = "wZ7ZyCtxkG41S7rqLrBqmYfj6vFuLnSslAQlt91bovM";
		$access_key = "726047942-1xIWuuR4i57yTvYsihOzzCEvL1VmHZVBj27GRekr";
		$access_secret = "3kqCWrdRkma8BbsVu0MfKTaxMJimUbah78udPOY57g";
		
		// IMPORT TWITTER OAUTH
		$this->load->library('TwitterOAuth');
		
		// CREATE NEW TWEET INSTANCE
		$this->connection = $this->TwitterOAuth->create($consumer_key, $consumer_secret, $access_key, $access_secret);
	}

	public function post() {
		$post = array('status' => $_POST['content']);
		$result = $this->connection->post('statuses/update', $post);
		
		if(!isset($result->error))
			echo "Post successful!";
		else
			echo "Post failed!";
	}
}