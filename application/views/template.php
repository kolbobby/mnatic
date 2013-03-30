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
		<?php include_once('includes/navigation.html') ?>

		<div class="hero-unit">
			<div class="container">
				<?php $this->load->view($content); ?>
			</div>
		</div>
	</body>
</html>