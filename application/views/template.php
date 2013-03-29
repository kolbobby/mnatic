<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title; ?></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
		
		<link rel="StyleSheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
		<style type="text/css">
			img {
				width:100%;
				height:300px;
			}

			.navbar-wrapper {
				top:0;
				left:0;
				right:0;
				margin-top:15px;
				position:absolute;
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
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navbar navbar-inverse">
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
			</div>
		</div>
		<div class="container"><?php $this->load->view($content); ?></div>
	</body>
</html>