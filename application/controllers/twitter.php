<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twitter extends CI_Controller {
	private $consumerKey = 'waCJgHUYryh7MKx1duFEqA';
	private $consumerSecret = 'wZ7ZyCtxkG41S7rqLrBqmYfj6vFuLnSslAQlt91bovM';
	private $OAuthToken = '726047942-1xIWuuR4i57yTvYsihOzzCEvL1VmHZVBj27GRekr';
	private $OAuthSecret = '3kqCWrdRkma8BbsVu0MfKTaxMJimUbah78udPOY57g';
	
	private $connection;
	public function __construct() {
		parent::__construct();
		
		$this->connection = $this->twitteroauth->create($consumerKey, $consumerSecret, $OAuthToken, $OAuthSecret);
	}
	
	public function post() {
		echo $this->connection;
	}
}