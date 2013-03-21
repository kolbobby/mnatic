<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twitter extends CI_Controller {
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
		$this->$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $OAuthToken, $OAuthSecret);
	}

	public function post() {
		//$post = $_POST['content'];
		//$this->$tweet->post('statuses/update', array('status' => "$post"));
		
		echo "Post successful!";
	}
}