<?php

	class Twitter extends CI_Controller {
		
		function __construct()
		{
			parent::__construct();
			
			// Enabling debug will show you any errors in the calls you're making, e.g:
			$this->tweet->enable_debug(TRUE);
			
			// If you already have a token saved for your user
			// (In a db for example) - See line #37
			// 
			// You can set these tokens before calling logged_in to try using the existing tokens.
			// $tokens = array('oauth_token' => 'foo', 'oauth_token_secret' => 'bar');
			// $this->tweet->set_tokens($tokens);
		}
		
		function login()
		{
			$this->tweet->set_tokens(array('oauth_token' => '726047942-8qrGvAQZjaELTf93zUMZrVrCJxa11NVyxQdGmjkH', 'oauth_token_secret' => 'hiRZbMoh1cvn50VcdSDdekwyPuXwz596v5tk0Eo0ew'));
			if ( !$this->tweet->logged_in() )
			{
				//$this->tweet->set_callback(site_url('twitter/auth'));
				
				// Send the user off for login!
				//$this->tweet->login();
			}
			else
			{
				// Already logged in via Twitter
				//redirect('/twitter/auth');
			}
		}
		
		function auth()
		{
			$tokens = $this->tweet->get_tokens();
			
			// $user = $this->tweet->call('get', 'account/verify_credentiaaaaaaaaals');
			// 
			// Will throw an error with a stacktrace.
			
			$user = $this->tweet->call('get', 'account/verify_credentials');
			print_r("Username: " . $user->screen_name);
			echo "<br />";
			print_r("Name: " . $user->name);
			
			/*
			$friendship 	= $this->tweet->call('get', 'friendships/show', array('source_screen_name' => $user->screen_name, 'target_screen_name' => 'elliothaughin'));
			var_dump($friendship);
			
			if ( $friendship->relationship->target->following === FALSE )
			{
				$this->tweet->call('post', 'friendships/create', array('screen_name' => $user->screen_name, 'follow' => TRUE));
			}
			
			$this->tweet->call('post', 'statuses/update', array('status' => 'Testing #CodeIgniter Twitter library by @elliothaughin - http://bit.ly/grHmua'));
			
			$options = array(
						'count' => 10,
						'page' 	=> 2,
						'include_entities' => 1
			);
			
			$timeline = $this->tweet->call('get', 'statuses/home_timeline');
			
			var_dump($timeline);
			*/
		}
	}