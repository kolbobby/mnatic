<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title; ?></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<link rel="StyleSheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
		<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
		
		<style type="text/css">
			img {
				width:100%;
				height:300px;
			}
			
			.navbar {
				top:15px;
				position:absolute;
			}
			
			.center-margin {
				width:90%;
				margin:0 5% 0 5%;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.carousel').carousel({
					interval: 5000
				});
			})
		</script>
	</head>
	
	<body>
		<?php include_once('includes/carousel.html'); ?>
		<div class="navbar center-margin">
			<div class="navbar-inner">
				<a class="brand" href="/">mNatic</a>
				<ul class="nav pull-right">
					<li class="active"><a href="/">Home</a></li>
					<li><a href="#">Sign In</a></li>
				</ul>
			</div>
		</div>
		<div><?php $this->load->view($content); ?></div>
	</body>
</html>