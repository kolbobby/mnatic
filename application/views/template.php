<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title; ?></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
		
		<link rel="StyleSheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
		<style type="text/css">
			body {
				padding-top:40px;
			}

			img {
				width:100%;
				height:300px;
			}
			
			.center-margin {
				width:90%;
				margin:0 5% 0 5%;
			}
		</style>
		<link rel="StyleSheet" href="<?= base_url(); ?>assets/css/bootstrap-responsive.css" />

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
		<div class="navbar navbar-inverse center-margin">
			<div class="navbar-inner">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<a class="brand" href="/">mNatic</a>

				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li class="active"><a href="/">Home</a></li>
						<li><a href="#">Sign In</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="center-margin"><?php $this->load->view($content); ?></div>
	</body>
</html>