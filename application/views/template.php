<?= base_url(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title; ?></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<link href="<?= base_url(); ?>assets/css/bootstrap.css" />
		<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('.carousel').carousel({
					interval: 5000
				});
			});
		</script>
	</head>
	
	<body>
		<div id="main-carousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol>
			
			<div class="carousel-inner">
				<div class="item active">
					<img src="http://placehold.it/1200x480" alt="" />
					<div class="carousel-caption">
						<p>Just a sample caption 1!</p>
					</div>
				</div>
				<div class="item">
					<img src="http://placehold.it/1200x480" alt="" />
					<div class="carousel-caption">
						<p>Just a sample caption 2!</p>
					</div>
				</div>
				<div class="item">
					<img src="http://placehold.it/1200x480" alt="" />
					<div class="carousel-caption">
						<p>Just a sample caption 3!</p>
					</div>
				</div>
			</div>
			
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	
		<div><?php $this->load->view($content); ?></div>
	</body>
</html>