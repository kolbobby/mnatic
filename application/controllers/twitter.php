<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twitter extends CI_Controller {
	private $connection;
	public function __construct() {
		parent::__construct();
		
		$consumerKey = 'waCJgHUYryh7MKx1duFEqA';
		$consumerSecret = 'wZ7ZyCtxkG41S7rqLrBqmYfj6vFuLnSslAQlt91bovM';
		$OAuthToken = '726047942-1xIWuuR4i57yTvYsihOzzCEvL1VmHZVBj27GRekr';
		$OAuthSecret = '3kqCWrdRkma8BbsVu0MfKTaxMJimUbah78udPOY57g';
		$this->connection = $this->twitteroauth->create($consumerKey, $consumerSecret, $OAuthToken, $OAuthSecret);
	}
	
	public function post() {
		echo $_POST['content'];
	}
}